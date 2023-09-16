<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{

   
    public function index(){
        $phone = User::find(1);
        $phone = User::find(2)->phone;

        $user = Phone::find(1);
        $user = Phone::find(2)->user;

        $users = User::all();
        return view('frontend.realation.phone',[
            'users' => $users
        ]);
      

     
    }
}
