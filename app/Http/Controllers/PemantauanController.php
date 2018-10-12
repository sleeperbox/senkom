<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemantauan;

class PemantauanController extends Controller
{
    //
    public function index(){
    	$pemantauans = Pemantauan::all();
    	return view('pemantauan_component.index', compact('pemantauans')); 
    }
}
