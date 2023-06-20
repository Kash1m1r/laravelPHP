<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RegistrarLinkController extends Controller{
    public function index(){
        /*
        $links = [
            'asdf',
            'asdfas'
        ];
        */
        $links = DB::select('SELECT nome, nucleo, desc FROM links;');
        return view('links.index')->with('links', $links);
    }
    public function create(){
        return view ('links.create');
    }
    public function store(Request $request){
        $nomeTicket = $request->input('nome');
        $nomeNucleo = $request->input('nucleo');
        $nomeDesc = $request->input('desc');
        

        if(DB::insert('INSERT INTO links (nome, nucleo, desc ) VALUES (?, ?, ?)', [$nomeTicket, $nomeNucleo, $nomeDesc])){
            return redirect('/links');
        }else{
            return "ERRROOOR";
        }
    }
}