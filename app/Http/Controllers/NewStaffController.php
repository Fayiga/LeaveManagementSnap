<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewStaffController extends Controller
{
    public function index()
    {
        return view('registration.index');
    }
}
