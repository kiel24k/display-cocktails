<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cockTail extends Controller
{
    public function json1()
    {
        return view('cocktail');
    }
    public function json2()
    {
        $jsonFile = json_decode(file_get_contents(storage_path('app/cocktail.json')),true);
        $drinks = $jsonFile["drinks"];

        return view('cocktailMain',['drinks'=>$drinks]);
    }
}
