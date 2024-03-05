<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function login(): string
    {
        return view('index');
    }
    public function daftarmhs(): string
    {
        return view('daftarmhs');
    }
    
    public function edit(): string
    {
        return view('editmhs');
    }
}
