<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller{
    public function index(Request $request){
        
        $listafrutas = [
            'Pera',
            'Uva',
            'Maçã',
            'Salada Mista'
        ];
        
        return view('listar-frutas', [
            'frutas' => $listafrutas
        ]);
    }
}