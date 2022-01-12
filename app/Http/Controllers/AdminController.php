<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use DB;

class AdminController extends Controller
{

    public function index(){
        $select = DB::select('select * from users');
        return view('homeAdmin')->with('name',$select);
    }
}
