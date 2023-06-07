<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller{
    public function index(Request $request){
        
        $series = [
            'Breaking Bad',
            'Cobra Kai',
            'The Office',
            'The Walking Dead'
        ];

        return view('series.index')->with('series', $series);
    }
}
