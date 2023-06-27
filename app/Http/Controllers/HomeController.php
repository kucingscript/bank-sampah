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
                'title' => 'Akun', 'isActive' => false, "link" => "/login"
            ],
        ]);

        $prinsipLists = collect([
            (object) [
                'title' => 'Reduce', "img" => "reduce.svg", 'text' => "Mengurangi penggunaan produk yang nantinya berpotensi menjadi sampah",
            ],
            (object) [
                'title' => 'Reuse', "img" => "reuse.svg", 'text' => "Memakai kembali barang-barang yang telah digunakan sebelumnya.",
            ],
            (object) [
                'title' => 'Recycle', "img" => "recycle.svg", 'text' => "Mengolah kembali sampah menjadi produk baru yang bermanfaat.",
            ],
        ]);

        $trashLists = collect([
            (object) [
                'title' => 'Baterai', "img" => "battery.svg", 'text' => "Mengandung berbagai logam berat (merkuri, nikel, dan kadmium) yang berbahaya bagi lingkungan dan kesehatan",
            ],
            (object) [
                'title' => 'Bola Lampu', "img" => "lamp.svg", 'text' => "Ketika bohlam lampu neon pecah, raksa bisa menguap dan membahayakan anak-anak dan wanita hamil.",
            ],
            (object) [
                'title' => 'Oli Motor', "img" => "oil.svg", 'text' => "Oli bekas mengandung senyawa rantai karbon berbahaya yang dapat merusak ekosistem apabila dilepas begitu saja",
            ],
            (object) [
                'title' => 'Obat Kadaluwarsa', "img" => "drug.svg", 'text' => "Obat yang rusak dan kadaluwarsa perlu dimusnahkan karena rentan disalahgunakan dan dapat membahayakan lingkungan",
            ],
            (object) [
                'title' => 'Termometer Kaca', "img" => "therm.svg", 'text' => "Merkuri pada termometer akan berbahaya bila dihirup oleh ibu hamil dan anak-anak bila pecah dan dibuang sembarangan",
            ],
            (object) [
                'title' => 'Lem Bekas', "img" => "glue.svg", 'text' => "Lem bekas mengandung senyawa berbahaya yang dapat merusak tanah. Bila hendak dibuang, ada baiknya dikeringkan dulu isinya",
            ],
        ]);

        $activities = collect([
            (object) ["title" => "We save the world"],
            (object) ["title" => "We save the world"],
            (object) ["title" => "We save the world"],
        ]);

        $about = collect([
            (object) ["src" => "https://www.avtokan.by/assets/img-temp/200x200/img1.jpg", "alt" => "Alexa featured Image"],
            (object) ["src" => "https://www.avtokan.by/assets/img-temp/200x200/img1.jpg", "alt" => "Olivia featured Image", "name" => ""],
            (object) ["src" => "https://www.avtokan.by/assets/img-temp/200x200/img1.jpg", "alt" => "Liam featued Image", "name" => ""],
            (object) ["src" => "https://www.avtokan.by/assets/img-temp/200x200/img1.jpg", "alt" => "Elijah featured image", "name" => ""],
            (object) ["src" => "https://www.avtokan.by/assets/img-temp/200x200/img1.jpg", "alt" => "Elijah featured image", "name" => ""],
        ]);

        return view("/home", ["navbarLists" => $navbarLists, "prinsipLists" => $prinsipLists, "trashLists" => $trashLists, "activities" => $activities, "about" => $about]);
    }
}
