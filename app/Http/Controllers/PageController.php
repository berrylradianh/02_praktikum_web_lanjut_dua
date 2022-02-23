<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "NIM   : 2041720102 <br>";
        echo "Nama  : Berryl Radian Hamesha <br>";
        echo "kelas : TI-2D <br>";
    }

    public function articles($id){
        echo "ini merupakan halaman artikel dengan ID" . $id;
    }
}
