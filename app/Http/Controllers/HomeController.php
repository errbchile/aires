<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $text = "Nombre: ".$request->input('nombre').", Modelo: ".$request->input('modelo').", Serie: ".$request->input('serie').", Status: ".$request->input('status').".";

        $producto['nombre'] = $request->input('nombre');
        $producto['modelo'] = $request->input('modelo');
        $producto['serie'] = $request->input('serie');
        $producto['status'] = $request->input('status');

        QrCode::format('svg')->size(200)
                             ->generate($text, "../public/qrcodes/".$request->input('nombre').".svg");

        $producto['url'] = asset('qrcodes/'.$request->input('nombre').".svg");

        return view('formulario.show', ['producto' => $producto]);
    }
}
