<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disco;

class DiscosController extends Controller
{
    
    public function listado(){
    	$discos=Disco::all();

    	return view("listado", compact("discos"));
    }

}
