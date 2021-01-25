<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filesController extends Controller
{
    public function index(){
        return view("files.index");
    }

    public function store(Request $request)
    {
        if($request->hasFile('archivos')){
            return "Se alzó correctamente";
        }
        return "No se alzó correctamente";
    }
}
