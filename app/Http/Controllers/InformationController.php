<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function navbar()
    {
        $navbarLists = collect([
            (object) [
                'title' => 'Menu Utama', 'isActive' => false, "link" => "/",
            ],
            (object) [
                'title' => 'Beranda', 'isActive' => false, "link" => "/home",
            ],
            (object) [
                'title' => 'Informasi', 'isActive' => true, "link" => "/information",
            ],
            (object) [
                'title' => 'Akunku', 'isActive' => false, "link" => "/account"
            ],
        ]);

        return view("/information", ["navbarLists" => $navbarLists]);
    }
}
