<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function show_home() {
        return view('index', [
            "title" => "Bandai Indonesia",
            "search" => "Search",
            "categories" => Category::orderBy('id', 'desc')->take(6)->get(),
            "sellers" => Seller::inRandomOrder()->take(6)->get(),
            "products" => Products::inRandomOrder()->take(12)->get()
        ]);
    }
}