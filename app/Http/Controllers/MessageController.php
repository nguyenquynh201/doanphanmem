<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message()
    {
        return view('admin/screen/message');
    }
}
