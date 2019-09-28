<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    public function index(){
    	$listPengumuman=Pengumuman::all();

    	//blade
    	return view ('pengumuman.index',compact('listPengumuman'));
    }
}
