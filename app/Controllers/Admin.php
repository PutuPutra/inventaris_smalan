<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function account()
    {
        $data = [
            'sidebar1' => null,
            'sidebar2' => null,
        ];

        return view('admin/account', $data);
    }
    public function settings()
    {
        $data = [
            'sidebar1' => null,
            'sidebar2' => null,
        ];
        return view('admin/settings', $data);
    }

    public function login()
    {
        return view('formLogin/authLogin');
    }
    public function register()
    {
        return view('formLogin/authRegister');
    }
    public function forgot_password()
    {
        return view('formLogin/authforgotpassword');
    }
    public function dashboard()
    {
        $data = [
            'sidebar1' => 'active',
            'sidebar2' => null,
            'sidebar3' => null,
        ];
        return view('admin/dashboard', $data);
    }
    public function data()
    {
        $data = [
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
        ];
        return view('admin/data', $data);
    }
    public function sarana()
    {
        $data = [
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
        ];
        return view('admin/sarana', $data);
    }
    public function prasarana()
    {
        $data = [
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => 'active',
        ];
        return view('admin/prasarana', $data);
    }
}
