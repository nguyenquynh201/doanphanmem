<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function manager()
    {
        return view('admin/tab/body');
    }
    public function loginManager()
    {
        return view('admin/login');
    }
    public function header()
    {
        return view('admin/tab/header');
    }
    public function navbar()
    {
        return view('admin/tab/navbar');
    }
    public function footer()
    {
        return view('admin/tab/footer');
    }
    public function body()
    {
        return view('admin/tab/body');
    }
   
}
