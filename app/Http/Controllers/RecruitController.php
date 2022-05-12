<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitController extends Controller
{
    //controller thông tin của tuyển dụng
    public function recruit()
    {
        return view('admin/screen/manager_recruit');
    }
}
