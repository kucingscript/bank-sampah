<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BtnController extends Controller
{
    public function btnList()
    {
        $btns = collect([
            (object) [
                'title' => 'Beranda', 'link' => '/home',
            ],
            (object) [
                'title' => 'Informasi', 'link' => '/information',
            ],
            (object) [
                'title' => 'Akunku', 'link' => '/login',
            ],
        ]);
        return view('landing', ["btns" => $btns]);
    }
}
