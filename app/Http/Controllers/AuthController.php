<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\MyClass\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

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


    public function register(Request $request)
    {
        if ($request->isMethod("get")) {
            return view("admin.authentication.register-basic");
        } else {
            $request->validate(['name' => 'required', 'mobile' => 'required|numeric|unique:users', 'password' => 'required|min:6']);

            $rand = rand(10000, 99999);

            Session::put('code', $rand);
            Session::put('mobile', $request->post('mobile'));
            Session::put('password', \request('password'));
            Session::put('name', \request('name'));

            $sms = Sms::send($request->post('mobile'), '379719',
                ["name" => "code", "value" => $rand]);

            if ($sms['message'] == 'موفق') {
                return redirect(route('checkcode'));
            }

        }
    }


        public function checkcode(Request $request)
        {
            if ($request->isMethod("get")) {
                return view("admin.authentication.checkcode-basic");
            }
            else{
                if ($request->get('code') ==  Session::get('code')){
                    
                }
                else{
                    return redirect()->back()->with('error','کد وارد شده صحیح نیست بادقت بیشتر وارد کنید و یا کد را مجدد دریافت کنید.');
                }
            }
        }

}
