<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function home() {
        $usertype=Auth::user() -> usertype;
        if ($usertype =='admin') {
            return view('admin.pages.dashboard');
        }else{
            return view('frontend.homepage');
        }
    }

    public function index(){
        return view('frontend.homepage');
    }
}
