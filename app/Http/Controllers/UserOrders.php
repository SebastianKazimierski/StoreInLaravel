<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOrders extends Controller
{
    public function Index(){
    $userorders = Order::where('user_id', Auth::user()->id)->paginate(12);
    return view('UserOrders', ['userorders'=>$userorders])
    ;}

}
