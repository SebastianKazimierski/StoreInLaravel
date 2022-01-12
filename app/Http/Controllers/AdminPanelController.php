<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use ProductController;

class AdminPanelController extends Controller
{
    public function index(){
        return view('AdminPanel');
    }
}
