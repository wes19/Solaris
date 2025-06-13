<?php

namespace App\Http\Controllers;

use App\Models\BlogSolari;
use App\Models\Producto;
use App\Models\Promocione;
use App\Models\Proyecto;
use App\Models\Testimonio;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Método para mostrar el blog
    public function blog(): \Illuminate\View\View
    {
        $blogs = BlogSolari::orderBy('created_at', 'desc')->get();
        return view('sections.blogs', compact('blogs'));
    }


    // Método para mostrar los productos
    public function producto(): \Illuminate\View\View
    {
        $productos = Producto::orderBy('created_at', 'desc')->get();
        return view('productos.index', compact('productos'));
    }

    // Método para mostrar las promociones
    public function promocion(): \Illuminate\View\View
    {
        $promociones = Promocione::where('deleted_at', '>', now())
                                ->orderBy('deleted_at', 'desc')
                                ->paginate(9);
        return view('promociones', compact('promociones'));
    }

    // Método para mostrar los proyectos
    public function proyecto(): \Illuminate\View\View
    {
        $proyectos = Proyecto::all(); 
        return view('sections.projects-list', compact('proyectos'));
    }

    // Método para mostrar los testimonios
    public function testimonio(): \Illuminate\View\View
    {
        $testimonios = Testimonio::all();
        return view('sections.testimonials', compact('testimonios'));
    }

    // Método para mostrar un producto específico
    public function show($id): \Illuminate\View\View
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    // Método para mostrar las noticias y proyectos en la página de inicio
    public function indexNews(): \Illuminate\View\View
    {
        $news = BlogSolari::orderBy('created_at', 'desc')->take(3)->get();
        $proyectos = Proyecto::orderBy('created_at', 'desc')->get();
        $testimonios = Testimonio::all(); 
        $blogs = BlogSolari::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('news', 'proyectos', 'testimonios', 'blogs'));
    }

}