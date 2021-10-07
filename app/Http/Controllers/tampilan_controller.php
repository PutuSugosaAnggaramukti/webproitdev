<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampilan_controller extends Controller
{
    public function viewlayout(){
        return view('layout.layout');
    }

    public function login(){
        return view('loginadmin.login');
    }

    public function hire(){
        return view('hire.hire');
    }

   

    public function viewslamet(){
        return view('layoutslamet.slamet');
    }
}
