<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function index(){
    	$listGaleri=Galeri::all();

    	//blade
    	return view ('galeri.index',compact('listGaleri'));
    }
}
