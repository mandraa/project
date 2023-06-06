<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "Juniar Andra P dan 2141720214";
    }

    public function articles(Request $request, $id) {
        return "Halaman Artikel". $id;
    }





}
