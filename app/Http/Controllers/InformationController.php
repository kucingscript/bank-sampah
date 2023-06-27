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
                'title' => 'Profile', 'isActive' => false, "link" => "/profile",
            ],
            (object) [
                'title' => 'Logout', 'isActive' => false, "link" => "/logout"
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

        $testimonialTexts = collect([
            (object) [
                'active' => 1, 'text' => 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.'
            ],
            (object) [
                'active' => 2, 'text' => 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.'
            ],
            (object) [
                'active' => 3, 'text' => 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.'
            ],
        ]);

        $testimonialUsers = collect([
            (object) [
                'active' => 1, 'user' => 'JD'
            ],
            (object) [
                'active' => 2, 'user' => 'WD'
            ],
            (object) [
                'active' => 3, 'user' => 'JW'
            ],
        ]);

        $testimonialDesc = collect([
            (object) [
                'active' => 1, 'user' => 'John Doe', 'desc' => 'google.com'
            ],
            (object) [
                'active' => 2, 'user' => 'John Wick', 'desc' => 'google.com'
            ],
            (object) [
                'active' => 3, 'user' => 'Jane Doe', 'desc' => 'google.com'
            ],
        ]);


        return view("/information", ["navbarLists" => $navbarLists, "carouselTexts" => $carouselTexts, "carouselImages" => $carouselImages, "testimonialTexts" => $testimonialTexts, "testimonialUsers" => $testimonialUsers, "testimonialDesc" => $testimonialDesc]);
    }
}
