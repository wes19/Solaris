<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Distribuidore;
use App\Models\Solicitude;
use Illuminate\Http\Request;
use App\Mail\Contactos;
use App\Mail\WorkUsMessage;
use App\Mail\Distribuidor;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http; // <-- IMPORTANTE

class ContactController extends Controller
{
    private function verifyRecaptcha(string $token, string $expectedAction, float $minScore = 0.5): bool
    {
        $resp = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret'),
            'response' => $token,
        ])->json();

        return ($resp['success'] ?? false) === true
            && ($resp['action'] ?? null) === $expectedAction
            && ($resp['score'] ?? 0) >= $minScore;
    }

    public function contactForm(Request $request)
    {
        $messageContact = $request->validate([
            'nombre'            => 'required',
            'correo'            => 'required|email',
            'telefono'          => 'required|numeric',
            'ciudad'            => 'required',
            'pais'              => 'required',
            'mensaje'           => 'required',
            'recaptcha_token'   => 'required',
            'recaptcha_action'  => 'required|in:contacto',
        ],[
            'nombre.required' => __('Necesitamos que ingrese su nombre para continuar'),
            'correo.required' => __('Necesitamos que ingrese su correo electronico para continuar'),
        ]);

        if (!$this->verifyRecaptcha($messageContact['recaptcha_token'], 'contacto')) {
            return back()
                ->withErrors(['recaptcha' => 'Fallo la verificación de seguridad.'])
                ->withInput();
        }
        
        DB::table('contactos')->insert([
            'nombre'  => $messageContact['nombre'],
            'correo'  => $messageContact['correo'],
            'numero'  => $messageContact['telefono'],
            'ciudad'  => $messageContact['ciudad'],
            'pais'    => $messageContact['pais'],
            'mensaje' => $messageContact['mensaje'],
        ]);

        Mail::to('desarrollo@24studiohn.com')->send(new Contactos($messageContact));
        return view('layouts.envio');
    }

    public function distriForm(Request $request)
    {
        $messageContact = $request->validate([
            'nombre'            => 'required',
            'empresa'           => 'required',
            'correo'            => 'required|email',
            'telefono'          => 'required|numeric',
            'ciudad'            => 'required',
            'depto'             => 'required',
            'mensaje'           => 'required',
            'recaptcha_token'   => 'required',
            'recaptcha_action'  => 'required|in:distribuidor',
        ],[
            'nombre.required' => __('Necesitamos que ingrese su nombre para continuar'),
            'correo.required' => __('Necesitamos que ingrese su correo electronico para continuar'),
        ]);

        if (!$this->verifyRecaptcha($messageContact['recaptcha_token'], 'distribuidor')) {
            return back()
                ->withErrors(['recaptcha' => 'Fallo la verificación de seguridad.'])
                ->withInput();
        }

        DB::table('distribuidores')->insert([
            'nombre'             => $messageContact['nombre'],
            'empresa'            => $messageContact['empresa'],
            'correo'             => $messageContact['correo'],
            'numero'             => $messageContact['telefono'],
            'ciudad'             => $messageContact['ciudad'],
            'departamento'       => $messageContact['depto'],
            'productos_Actuales' => $messageContact['mensaje'],
        ]);

        Mail::to('desarrollo@24studiohn.com')->send(new Distribuidor($messageContact));
        return view('layouts.envio');
    }

    public function workUsForm(Request $request)
    {
        $messageWorkUs = $request->validate([
            'nombre'            => 'required',
            'correo'            => 'required|email',
            'telefono'          => 'required|numeric|min:11',
            'ciudad'            => 'required',
            'exp'               => 'not_in:0|required',
            'file'              => 'required|max:10000|mimes:pdf,doc,docx,pptx',
            'recaptcha_token'   => 'required',
            'recaptcha_action'  => 'required|in:empleo',
        ],[
            'telefono.required' => 'Solo utilizar números.',
        ]);

        if (!$this->verifyRecaptcha($messageWorkUs['recaptcha_token'], 'empleo')) {
            return back()
                ->withErrors(['recaptcha' => 'Fallo la verificación de seguridad.'])
                ->withInput();
        }

        $id = $messageWorkUs['correo'];
        $existe = DB::table('solicitudes')->where('correo', $id)->exists();

        if ($existe) {
            return view('layouts.envio');
        }

        $file = $request->file('file');
        $fileNameWithExt = str_replace(" ", "_", $file->getClientOriginalName());
        $pathFile = $file->storeAs('public/cvs', $fileNameWithExt);
        $absolutePath = storage_path('app/public/cvs/' . $fileNameWithExt);

        DB::table('solicitudes')->insert([
            'nombre'               => $messageWorkUs['nombre'],
            'correo'               => $messageWorkUs['correo'],
            'numero'               => $messageWorkUs['telefono'],
            'ciudad'               => $messageWorkUs['ciudad'],
            'experiencia_laboral'  => $messageWorkUs['exp'],
            'archivo'              => $pathFile,
        ]);

        Mail::to('desarrollo@24studiohn.com')->send(new WorkUsMessage($messageWorkUs, $absolutePath));
        return view('layouts.envio');
    }
}