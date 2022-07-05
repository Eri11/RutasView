<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos=[
            ['nombre'=>'Escoba'],
            ['nombre'=>'Trapeador'],
            ['nombre'=>'Trapito']
        ];
        return view('productos', compact('productos'));
    }

}
