<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function account()
    {
        $data = [
            'heading' => 'Account',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];

        return view('admin/account', $data);
    }
    public function settings()
    {
        $data = [
            'heading' => 'Pengaturan',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];

        return view('admin/settings', $data);
    }

    public function login()
    {
        return view('formLogin/authLogin');
    }
    // public function register()
    // {
    //     return view('formLogin/authRegister');
    // }
    public function forgot_password()
    {
        return view('formLogin/authforgotpassword');
    }
    public function dashboard()
    {
        $data = [
            'heading' => 'Dashboard',
            'sidebar1' => 'active',
            'sidebar2' => null,
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,

        ];
        return view('admin/dashboard', $data);
    }


    public function prasarana()
    {
        $data = [
            'heading' => 'Prasarana',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => 'active',
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/prasarana', $data);
    }
}
