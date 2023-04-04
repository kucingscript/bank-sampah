<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $navbarLists = collect([
            (object) [
                'title' => 'Menu Utama', 'isActive' => false, "link" => "/",
            ],
            (object) [
                'title' => 'Beranda', 'isActive' => true, "link" => "/home",
            ],
            (object) [
                'title' => 'Informasi', 'isActive' => false, "link" => "/information",
            ],
            (object) [
                'title' => 'Akunku', 'isActive' => false, "link" => "/account"
            ],
        ]);

        $prinsipLists = collect([
            (object) [
                'title' => 'Reduce', "img" => "reduce.svg", 'text' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque reiciendis sed doloremque obcaecati illo alias.",
            ],
            (object) [
                'title' => 'Reuse', "img" => "reuse.svg", 'text' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque reiciendis sed doloremque obcaecati illo alias.",
            ],
            (object) [
                'title' => 'Recycle', "img" => "recycle.svg", 'text' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque reiciendis sed doloremque obcaecati illo alias.",
            ],
        ]);

        $trashLists = collect([
            (object) [
                'title' => 'Baterai', "img" => "battery.svg", 'text' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque reiciendis sed doloremque obcaecati illo alias.",
            ],
            (object) [
                'title' => 'Bola Lampu', "img" => "lamp.svg", 'text' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque reiciendis sed doloremque obcaecati illo alias.",
            ],
            (object) [
                'title' => 'Oli Motor', "img" => "oil.svg", 'text' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque reiciendis sed doloremque obcaecati illo alias.",
            ],
            (object) [
                'title' => 'Obat Kadaluwarsa', "img" => "drug.svg", 'text' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque reiciendis sed doloremque obcaecati illo alias.",
            ],
        ]);

        $activities = collect([
            (object) ["title" => "We save the world"],
            (object) ["title" => "We save the world"],
            (object) ["title" => "We save the world"],
        ]);

        return view("/home", ["navbarLists" => $navbarLists, "prinsipLists" => $prinsipLists, "trashLists" => $trashLists, "activities" => $activities]);
    }
}
