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

        return view('listar-linguagens', [
            'linguagens' => $linguagens
        ]);
    }
}
