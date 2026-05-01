<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{

    public function index() {

        $name = 'beto';

        $habits = [ 'Ler', 'Estudar', 'Exercitar' ];
    

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
        
    }
}
