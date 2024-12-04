<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'judul'=> "Amerta Hijab",   
            "subjudul"=> "AmertaHijab is a Muslimah fashion brand that emphasizes a combination of elegance, simplicity, and comfort. Established in 2019, AmertaHijab is committed to presenting high-quality hijab products with elegant designs that are suitable for various occasions, both formal and casual.",
            "deskripsi_1"=> "Providing hijab and Muslimah fashion products with the best quality and affordable prices.",
            "deskripsi_2"=> "Enhance creativity in design to meet the needs of a modern lifestyle that remains in accordance with Islamic principles.",
            "kelebihan_1"=> "Rectangle Hijab: Available in various patterns and materials, perfect for everyday style and special occasions.",
            "kelebihan_2"=> "Premium Pashmina: Minimalist design with soft and comfortable material for all-day wear.",
            "kelebihan_3"=> "Elegant Skirt: Stylish and versatile skirts made with high-quality materials, perfect for formal or casual wear.",
            "kelebihan_4"=> "Chic Dress: Modern and elegant dresses designed for comfort and style on any occasion.",
        ]);
    }
}
