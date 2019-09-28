<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
    	$listKategoriArtikel=KategoriArtikel::all();

    	//blade
    	return view ('kategori_artikel.index',compact('listKategoriArtikel'));
    }
}
