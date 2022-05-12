<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    // controller thông tin nhà tuyển dụng
    public function recruiter()
    {
        return view('admin/screen/manager_recruiter');
    }
}
