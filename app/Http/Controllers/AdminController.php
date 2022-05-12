<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manager() {
        return view('admin/manager');
    }
    public function loginManager() {
        return view('admin/login');
    }
    public function header() {
        return view('admin/tab/header');
    }
    public function navbar() {
        return view('admin/tab/navbar');
    }
    public function footer() {
        return view('admin/tab/footer');
    }
    public function body() {
        return view('admin/tab/body');
    }
}
