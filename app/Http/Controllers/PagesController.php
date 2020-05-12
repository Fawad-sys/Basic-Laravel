<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function userlist(){
        return view('userlist');
    }

    public function create(){
        return view('create');
    }
}
