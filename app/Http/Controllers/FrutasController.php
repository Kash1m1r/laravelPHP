<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller{
    public function index(Request $request){
        
        $frutas = [
            'Pera',
            'Uva',
            'Maçã',
            'Salada Mista'
        ];
        
        return view('frutas.index')->with('frutas', $frutas);
    }
    public function create(){
        return view('frutas.createFruta');
    }
}