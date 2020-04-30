<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function dashboard(){
        return view('dashboard.admin_index');

    }
}
