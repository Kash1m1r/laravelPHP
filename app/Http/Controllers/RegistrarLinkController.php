<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RegistrarLinkController extends Controller{
    public function index(Request $request){
        $links = Link::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        
        return view('links.index')->with('links', $link);
    }

    public function create(){
        return view ('links.create');
    }
    public function store(Request $request){
        Link::create($request->all());
        return to_route(links.index);
    }

    public function destroy(Request $request){

    }
}