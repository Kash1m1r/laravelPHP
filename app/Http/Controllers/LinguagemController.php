<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinguagemController extends Controller{
    public function index(Request $request){
        return redirect('https://defensoria.ma.def.br');
        $linguagens = [
            'PHP',
            'JavaScript',
            'Python'
        ];

        $html = '<ul>';
        foreach ($linguagens as $linguagem){
            $html .= "<li>$linguagem</li>";
        }
        $html .= '</ul>';
        return $html;
    }
}
