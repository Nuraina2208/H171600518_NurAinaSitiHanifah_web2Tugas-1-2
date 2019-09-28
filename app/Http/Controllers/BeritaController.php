<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){
    	$listBerita=Berita::all();

    	//blade
    	return view ('berita.index',compact('listBerita'));
    }
}
