<?php

namespace App\Controllers;


class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin()
    {
        echo 'Post Login';
    }
    public function registrar()
    {
        return view('register');
    }
}