<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinguagemController extends Controller
{
    public function listarLinguagens(){
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
        echo $html;
    }
}
