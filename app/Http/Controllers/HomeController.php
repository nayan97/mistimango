<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect() {
        $usertype=Auth::user() -> usertype;
        if ($usertype =='1') {
            return view('admin.pages.dashboard');
        }else{
            return view('frontend.homepage');
        }
    }

    public function index(){
        return view('frontend.homepage');
    }
}
