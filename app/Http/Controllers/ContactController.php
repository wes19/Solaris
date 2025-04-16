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
use Sichikawa\LaravelSendgridDriver\SendGrid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contactForm(Request $request){
        $messageContact = request()->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required|numeric',
            'ciudad' => 'required',
            'pais' => 'required',
            'mensaje' => 'required',
            //'g-recaptcha-response' => 'required|captcha',
        ],[
            'name.required' => __('Necesitamos que ingrese su nombre para continuar'),
            'email.required' => __('Necesitamos que ingrese su correo electronico para continuar'),
        ]);

        DB::table('contactos')->insert(
            [
                'nombre' => $messageContact['nombre'],
                'correo' => $messageContact['correo'],
                'numero' => $messageContact['telefono'],
                'ciudad' => $messageContact['ciudad'],
                'pais' => $messageContact['pais'],
                'mensaje' => $messageContact['mensaje'],
            ]
        );

        Mail::to('desarrollo@24studiohn.com')->send(new Contactos($messageContact));
        //Mail::to('info@solarishn.com')->send(new Contactos($messageContact));/* archivo Mail */
        //Mail::to('jefecomercial@solarishn.com')->send(new Contactos($messageContact));/* archivo Mail */
        //Mail::to('ingridcho@24studiohn.com')->send(new Contactos($messageContact));/* archivo Mail */
        //Mail::to('ivan.pastor@solarishn.com')->send(new Contactos($messageContact));/* archivo Mail */
        
        return view('layouts.envio');
    }


    public function distriForm(Request $request){
        $messageContact = request()->validate([
            'nombre' => 'required',
            'empresa' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required|numeric',
            'ciudad' => 'required',
            'depto' => 'required',
            'mensaje' => 'required',
            //'g-recaptcha-response' => 'required|captcha',
        ],[
            'name.required' => __('Necesitamos que ingrese su nombre para continuar'),
            'email.required' => __('Necesitamos que ingrese su correo electronico para continuar'),
        ]);

        DB::table('distribuidores')->insert(
            [
                'nombre' => $messageContact['nombre'],
                'empresa' => $messageContact['empresa'],
                'correo' => $messageContact['correo'],
                'numero' => $messageContact['telefono'],
                'ciudad' => $messageContact['ciudad'],
                'departamento' => $messageContact['depto'],
                'productos_Actuales' => $messageContact['mensaje'],
            ]
        );
        
        Mail::to('desarrollo@24studiohn.com')->send(new Distribuidor($messageContact));
        //Mail::to('info@solarishn.com')->send(new Distribuidor($messageContact));/* archivo Mail */
        //Mail::to('jefecomercial@solarishn.com')->send(new Distribuidor($messageContact));/* archivo Mail */
        //Mail::to('ingridcho@24studiohn.com')->send(new Distribuidor($messageContact));/* archivo Mail */
        //Mail::to('ivan.pastor@solarishn.com')->send(new Distribuidor($messageContact));/* archivo Mail */
        
        return view('layouts.envio');
    }


    public function workUsForm(Request $request){
        $messageWorkUs = request()->validate([
            'nombre' => 'required',
            'correo'  => 'required',
            'telefono' => 'required|numeric|min:11',
            'ciudad'  =>  'required',
            'exp' => 'not_in:0|required',
            'file' => 'required|max:10000|mimes:pdf,doc,docx,pptx',
            //'g-recaptcha-response' => 'required|captcha',

        ],[
            'telefono.required' => 'Solo utilizar números.',
        ]);
        $id = request()->correo;
        $existe = DB::table('solicitudes')->where('correo', $id)->exists();;
       
        if($existe){
            return view('layouts.envio');
        }else{
            $file = $request->file('file');
            $fileNameWithExt = str_replace(" ", "_", $file->getClientOriginalName());
            $pathFile = $file->storeAs('public/cvs', $fileNameWithExt);
            $absolutePath = storage_path('app/public/cvs/' . $fileNameWithExt);            
    
            DB::table('solicitudes')->insert(
                [
                    'nombre' => $messageWorkUs['nombre'],
                    'correo' => $messageWorkUs['correo'],
                    'numero' => $messageWorkUs['telefono'],
                    'ciudad' => $messageWorkUs['ciudad'],
                    'experiencia_laboral' => $messageWorkUs['exp'],
                    'archivo' => $pathFile,
                ]
            );
            Mail::to('desarrollo@24studiohn.com')->send(new workUsMessage($messageWorkUs, $absolutePath));
            //Mail::to('info@solarishn.com')->send(new workUsMessage($messageWorkUs,$pathtofile));/* archivo Mail */
            //Mail::to('ingridcho@24studiohn.com')->send(new workUsMessage($messageWorkUs,$pathtofile));/* archivo Mail */
            //Mail::to('ivan.pastor@solarishn.com')->send(new workUsMessage($messageWorkUs,$pathtofile));/* archivo Mail */
            
            return view('layouts.envio');
        }
    }
    
}
