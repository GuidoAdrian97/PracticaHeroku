<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
    public function mostrarpersona(){
    	$datospersona=Persona::all();
    	return response()->json(['persona'=>$datospersona]);
    }
}
