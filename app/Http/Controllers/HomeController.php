<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $user_type = Auth::user()->user_type;

        if($user_type == '1'){
            return view('admin.home');
        }else{
            return view('dashboard');
        }
    }
}
