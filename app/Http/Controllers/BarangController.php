<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    public function getNama($nama)
    {
    	$barang = barang::where('nama',$nama)->first();
    	//jika nama tidak ada 
    	if (is_null($barang)) {
    		return 'Nama Tidak Ada';
    	}
    	//jika nama tidak ada
    	return 'Nama Barang Adalah : '. $barang ->nama;
    }
    public function getAlamat(){
    	return 'Bandung';
    }
}
