<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Muhammad Rizky Fauzi ,2241720221';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}