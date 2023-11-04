<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');

    }

    public function regisztracio()
    {
        return view('regisztracio');

    }
    public function udv()
    {
        return view('udv');

    }
}
