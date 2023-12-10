<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Other',
            'slug' => 'other',
            'description' => 'Other Categories',
            'images' => 'img\for-seeder\categories\other.png'
        ]);

        Category::create([
            'name' => 'Clothing And Apparel',
            'slug' => 'clothing',
            'description' => 'Mens Clothing,Womens Clothing, Kids Clothing, Shoes, and Accessories',
            'images' => 'img\for-seeder\categories\clothing.png'
        ]);

        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'description' => 'Smartphone, Laptop, Computer, Audio, Headphone, Camera and Accessories',
            'images' => 'img\for-seeder\categories\electronic.png'
        ]);

        Category::create([
            'name' => 'Home and Furniture',
            'slug' => 'home-furniture',
            'description' => 'Furniture, Home Decor, Kitchen, And Bath',
            'images' => 'img\for-seeder\categories\home-furniture.png'
        ]);

        Category::create([
            'name' => 'Beauty and Personal Care',
            'slug' => 'beauty-care',
            'description' => 'Skincare, Makeup, Haircare, Personal Care',
            'images' => 'img\for-seeder\categories\beauty.png'
        ]);

        Category::create([
            'name' => 'Sports and Outdoors',
            'slug' => 'sports',
            'description' => 'Sport Equipment, Outdoor Gear, Activewear, And Camping',
            'images' => 'img\for-seeder\categories\sports.png'
        ]);

        Category::create([
            'name' => 'Books and Stationery',
            'slug' => 'books',
            'description' => 'Book, Office, Writing, And Art',
            'images' => 'img\for-seeder\categories\books.png'
        ]);

        Category::create([
            'name' => 'Toys and Games',
            'slug' => 'toy-games',
            'description' => 'Toys, Board Games, Video Games, And Outdoor Play',
            'images' => 'img\for-seeder\categories\toys.png'
        ]);

        Category::create([
            'name' => 'Health and Wellness',
            'slug' => 'health-wellness',
            'description' => 'Vitamins, Supplements, Fitness, And Devices',
            'images' => 'img\for-seeder\categories\health.png'
        ]);

        Category::create([
            'name' => 'Blu-Ray Films',
            'slug' => 'jewelry-accessories',
            'description' => 'Jewelry, Watches, Bags, And Wallets',
            'images' => 'img\for-seeder\categories\film.jpg'
        ]);

        Category::create([
            'name' => 'Rubiks Cube',
            'slug' => 'automotive',
            'description' => 'Car Accessories, Motorcycle, Tools, And Parts',
            'images' => 'img\for-seeder\categories\automotive.png'
        ]);

        Category::create([
            'name' => 'Comics',
            'slug' => 'pet-supply',
            'description' => 'Pet Food, Accesories, Grooming, And Toys',
            'images' => 'img\for-seeder\categories\comics.png'
        ]);

        Category::create([
            'name' => 'Tomica Diecast',
            'slug' => 'travel-luggage',
            'description' => 'Bags, Accesories, Clothing, And Gear',
            'images' => 'img\for-seeder\categories\travel.jpg'
        ]);

        Category::create([
            'name' => 'Anime',
            'slug' => 'gift-occasions',
            'description' => 'Gifts and Cards',
            'images' => 'img\for-seeder\categories\gift.webp'
        ]);

        Category::create([
            'name' => 'Gunpla',
            'slug' => 'electrical',
            'description' => 'Appliances and Smart Home Device',
            'images' => 'img\for-seeder\categories\appliances.png'
        ]);
    }
}
