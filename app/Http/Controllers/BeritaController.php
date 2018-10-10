<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
	public function index()
	{
		$beritas = Berita::All();
		return view('berita_component.index', compact('beritas'));
	}
	public function kirim(Request $request){
		$callsign = $request->input('callsign');
		$tlp = $request->input('tlp');
		$pesan = $request->input('pesan');

		$data=array('callsign'=>$callsign,"tlp"=>$tlp,"pesan"=>$pesan);

		Berita::insert($data);
		return back();
	}

}
