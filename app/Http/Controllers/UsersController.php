<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin/home');
    }
    public function teller()
    {
        return view('teller/home');
    }
}
