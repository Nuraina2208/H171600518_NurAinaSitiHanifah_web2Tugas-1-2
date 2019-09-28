<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
    	$listKategoriPengumuman=KategoriPengumuman::all();

    	//blade
    	return view ('kategori_pengumuman.index',compact('listKategoriPengumuman'));
    }
}
