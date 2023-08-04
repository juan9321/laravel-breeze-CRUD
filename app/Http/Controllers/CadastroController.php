<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastro;

class CadastroController extends Controller
{
    public function create(){

        return view('cadastrar');

    }

    public function store (Request $request){

        cadastro::create($request->all());

        return view('listar');

    }
}
