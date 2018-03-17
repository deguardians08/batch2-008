<?php

namespace App\Http\Controllers;
use App\Barang;

class HomeController extends Controller
{
    public function getHome()
    {
    	$barang = Barang::where('nama','Caplin')->get();
    dd($barang);
    	return view ('welcome');
    }
}
