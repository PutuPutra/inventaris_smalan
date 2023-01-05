<?php

namespace App\Controllers;

class laptopController extends BaseController
{
    public function komputer()
    {
        $data = [
            'heading' => 'Komputer',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => 'active',
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
        return view('admin/sarana/laptop/fileKomputer', $data);
    }
    public function tambahLaptop()
    {
        $data = [
            'heading' => 'Tambah Data Komputer',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => 'active',
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
        return view('admin/sarana/laptop/tambahLaptop', $data);
    }
}
