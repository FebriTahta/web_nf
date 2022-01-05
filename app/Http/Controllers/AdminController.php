<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function page_admin_dashboard()
    {
        return view('be.artikel_berita.dashboard');
    }

    public function page_admin_post()
    {
        return view('be.artikel_berita.post');
    }
}
