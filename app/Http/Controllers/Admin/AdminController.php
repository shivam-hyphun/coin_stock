<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.pages.index');
    }
    // public function users()
    // {
    //     return view('backend.pages.user_details');
    // }

}
