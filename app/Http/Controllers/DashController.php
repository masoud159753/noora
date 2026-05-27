<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    //
    public function dashboard(){

        return view('admin.index');
    }

    public function accounts(){
        return view('admin.accounts.account');
    }

    public function transactions(){
        return view('admin.transactions.transactions');
    }
}
