<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\MyClass\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function login(Request $request){
        if ($request->isMethod("get")) {
            return view("admin.authentication.login-basic");
        }
        else{

            $request->validate(['mobile'=>'required','password'=>'required']);

            if (Auth::attempt(['mobile'=>\request('mobile'),
                'password'=>\request('password')])) {

                $request->session()->regenerate();

                return redirect()->intended('/dashboard');

            }
            else{
                return redirect()->back()->withErrors(['fail'=>'نام کاربری و یا رمز عبور اشتباه است.']);
            }
        }
    }


        public function register(Request $request)
    {
        if ($request->isMethod("get")) {
            return view("admin.authentication.register-basic");
        } else {
            $request->validate(['name' => 'required', 'mobile' => 'required|numeric|unique:users', 'password' => 'required|min:6']);

            //برای محدودیت کاربر
            $key='otp:mobile:'.$request->input('mobile');
            if (RateLimiter::tooManyAttempts($key, 6)) {
                $seconds = intval(RateLimiter::availableIn($key)/60);
                return redirect()->back()->with('error',"تلاش بیش از حد تا {$seconds} دقیقه دیگر نمی توانید وارد شوید. ");
            }
            RateLimiter::hit($key, 60 * 60 * 1);
            //برای محدودیت کاربر

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

                //ساخت یک کد یونیک از طریق آی پی و شماره تلفن کاربر
                $ipKey = 'otp:ip:' . request()->ip();
                $phoneKey = 'otp:phone:' . request('phone');

                if (RateLimiter::tooManyAttempts($ipKey, 6) ||
                    RateLimiter::tooManyAttempts($phoneKey, 6) ) {

                    //بدست آوردن زمان محدودیت باقی مانده
                    $seconds =max(intval(RateLimiter::availableIn($ipKey)/60),
                        intval(RateLimiter::availableIn($phoneKey)/60));

                    return redirect()->back()->with('error',"تلاش بیش از حد تا {$seconds} دقیقه دیگر نمی توانید وارد شوید. ");
                }
                //ست کردن زمان محدودیت در این مثال 4 ساعت (دوبار ضربدر 60 تبدیل به ثانیه)
                RateLimiter::hit($ipKey, 60 * 60 * 1);
                RateLimiter::hit($phoneKey, 60 * 60 * 1);


                if ($request->input('code') ==  Session::get('code')){

                    $User=User::create([
                        'name' => Session::get('name'),
                        'mobile' => Session::get('mobile'),
                        'password' => Hash::make(Session::get('password')),
                        ]);

                    Auth::loginUsingId($User->id);

                    //پاک کردن محدودیت در صورت ورود کاربر
                    RateLimiter::clear($ipKey);
                    RateLimiter::clear($phoneKey);
                    return redirect(route('dashboard'));
                }
                else{

                    return redirect()->back()->with('error','کد وارد شده صحیح نیست بادقت بیشتر وارد کنید و یا کد را مجدد دریافت کنید.');
                }
            }
        }



}
