<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }

    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Muhammad Ivan Yoda Bellamy - 2241760094';
    }

    public function articles($id) {
        return 'ID saya : '.$id;
    }

}

