<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // dd('Hello world');
        // var_dump('Hello world');
        return view('welcome_message');
    }
}
