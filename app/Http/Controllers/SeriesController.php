<?php

namespace App\Http\Controllers;

class SeriesController{
    public function listarSeries(){
        $series = [
            'Breaking bad',
            'Cobra kai'
        ];

        $html = '<ul>';
        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';
        echo $html;
    }
}