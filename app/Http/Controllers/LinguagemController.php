<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinguagemController extends Controller{
    public function index(Request $request){
        
        $linguagens = [
            'PHP',
            'JavaScript',
            'Python'
        ];

        return view('linguagens.index')->with('linguagens', $linguagens);
    }

    public function create(){
        return view('linguagens.createLinguagem');
    }
}
