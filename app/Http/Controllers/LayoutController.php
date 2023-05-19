<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index (){
        return view('layout.home')->with([
            'user' => Auth::user(),
        ]);
    }
}
