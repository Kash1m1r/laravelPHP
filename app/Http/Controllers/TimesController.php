<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TimesController extends Controller
{
    public function index()
    {
        $timess = DB::select('SELECT nome, pais, desc FROM timess;');


        return view('times.index')->with('times', $timess);
    }

    public function create()
    {
        return view('times.create');
    }
    public function store(Request $request){
        $nomeTime = $request->input('nome');
        $nomePais = $request->input('pais');
        $nomeDesc = $request->input('desc');

        if(DB::insert('INSERT INTO timess (nome, pais, desc) VALUES (?,?,?)', [$nomeTime, $nomePais, $nomeDesc])){
            return redirect('/times');
        }else{
            return "ERRROOOR";
        }
    }
}
