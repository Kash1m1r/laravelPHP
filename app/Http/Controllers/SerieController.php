<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller{
    public function index(Request $request){
        
        $series = [
            'Breaking Bad',
            'Cobra Kai',
            'The Office'
        ];

        $html = '<ul>';
        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';
        return $html;
    }
}
