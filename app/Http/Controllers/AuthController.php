<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\MyClass\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    //

    public function login(Request $request){

        if ($request->isMethod("get")) {
            return view("admin.authentication.login-basic");
        }
        else{
            return 'post';
        }
    }


    public function register(Request $request){
        if ($request->isMethod("get")) {
            return view("admin.authentication.register-basic");
        }
        else{
            $request->validate(['name'=>'required','mobile'=>'required|numeric|unique:users','password'=>'required|min:6']);

            $sms=Sms::send($request->post('mobile'),'379719',
                ["name"=>"code", "value"=> "989631"]);


            if ($sms['message']=='موفق') {
                return 'ok';
            }

//            User::create([
//                'name'=>$request->post('name'),
//                'mobile'=>$request->post('mobile'),
//                'password'=>Hash::make($request->post('password')),
//            ]);
//
//            return redirect('/dashboard');
        }
    }
}
