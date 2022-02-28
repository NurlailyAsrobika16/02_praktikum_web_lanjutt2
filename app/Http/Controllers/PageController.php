<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about() {
        echo "NIM : 20417201720<br>Nama : Nurlaily Asrobika<br>Kelas : TI-2B"; 
    }

    public function articles($id) {
        return "Ini adalah halaman artikel dengan id = " .$id;
    }
}