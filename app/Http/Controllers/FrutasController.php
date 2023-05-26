<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller{
    public function index(Request $request){
        return redirect('https://macademel.com.br/');
        $listafrutas = [
            'Pera',
            'Uva',
            'Maçã',
            'Salada Mista'
        ];
        $html = '<ul>';
        foreach ($listafrutas as $frutas){
            $html .= "<li>$frutas</li>";
        }
        $html .= '</ul>';
        return $html;
    }
}