<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
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

        $carouselTexts = collect([
            (object) [
                'text' => 'Dragon Fruit', "active" => 0
            ],
            (object) [
                'text' => 'Avocado', "active" => 1
            ],
            (object) [
                'text' => 'Mango', "active" => 2
            ],
            (object) [
                'text' => 'Orange', "active" => 3
            ],
        ]);

        $carouselImages = collect([
            (object) [
                'src' => 'https://images.unsplash.com/photo-1581375221876-8f287f7cd2cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=770&q=80'
            ],
            (object) [
                'src' => 'https://images.unsplash.com/photo-1581375279144-bb3b381c7046?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80'
            ],
            (object) [
                'src' => 'https://images.unsplash.com/photo-1581375303816-4a17124934f7?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80'
            ],
            (object) [
                'src' => 'https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&auto=format&fit=crop&w=770&q=80'
            ],
        ]);



        return view("/information", ["navbarLists" => $navbarLists, "carouselTexts" => $carouselTexts, "carouselImages" => $carouselImages]);
    }
}
