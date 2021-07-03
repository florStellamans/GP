<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leerkracht;
use App\Models\Uur;
use App\Models\Afwezigheid;

class GpController extends Controller
{
    function displayHome(){
        return view('home', ["afwezigheden" => Afwezigheid::get() ]);
    }

    function displayInput(){
        return view('input', ["leerkrachten" => Leerkracht::get()], ["uren" => Uur::get()]);
    }

    function processInput(Request $request){
        $results = $this -> validateAfwezigheid($request);

        $afwezig = new Afwezigheid();

        $afwezig -> uur = $results["uur"];
        $afwezig -> leerkracht = $results["leerkracht"];

        $afwezig -> save();
        return view('return');
    }

    function validateAfwezigheid(Request $request){

        $rules = [
            'uur' => "required|integer",
            'leerkracht' => "required|string"
        ];

        return $request -> validate($rules);
    }

    function removeAfwezigheden(){
        return view('input', ['removeAfwezigheden' => Afwezigheid::truncate()]);
    }
}
