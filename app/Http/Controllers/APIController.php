<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.genderize.io/?name[]=peter&name[]=lois&name[]=stevie&name[]=juan&name[]=vite&name[]=pedro&name[]=lesly&name[]=Caro&name[]=Emma');
        $datos = json_decode($response->getBody()->getContents(), true);


        $info = [];	

        foreach($datos as $item){
            $info[] = [
                'Nombre' => $item['name'],
                'Genero' => $item['gender'],
                'Probabilidad' => $item['probability'],
                'Contador' => $item['count']
            ];
        }

        //return $info;

        return view('layout.api', ['pasar' => $info]);
    }
}