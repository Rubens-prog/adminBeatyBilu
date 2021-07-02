<?php

namespace App\Http\Controllers;
use App\Models\Sobre;


use Illuminate\Http\Request;

class ControllerSobre extends Controller
{
    //
    function salvaSobre (Request $request) {

        $data=$request->except(["_token"]);
        $sobre=Sobre::create($data);

    }


}
