<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BtnController extends Controller
{
    public function btnList()
    {
        $btns = collect([
            (object) [
                'title' => 'Beranda', 'link' => '/home', 'img' => 'estate.svg'
            ],
            (object) [
                'title' => 'Informasi', 'link' => '/information', 'img' => 'information.svg'
            ],
            (object) [
                'title' => 'Akun', 'link' => '/login', 'img' => 'acc.svg'
            ],
        ]);
        return view('landing', ["btns" => $btns]);
    }
}
