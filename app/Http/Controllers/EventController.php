<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = 'bruno';
        $arr = [1,2,3,4,5,6];
        $names = ["bruno","mateus","rocha"];
        return view('welcome',
            [
                'nome' => $nome,
                'arr' => $arr,
                'names' => $names
            ]);
    }

    public function create(){
        return view('events.create');
    }
}
