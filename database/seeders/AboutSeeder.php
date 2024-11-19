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
            "subjudul"=> "AmertaHijab adalah brand fashion Muslimah yang mengedepankan kombinasi keanggunan, kesederhanaan, dan kenyamanan. Berdiri sejak 2019, AmertaHijab berkomitmen untuk menghadirkan produk hijab berkualitas tinggi dengan desain elegan yang cocok untuk berbagai kesempatan, baik formal maupun kasual.",
            "deskripsi_1"=> "Menyediakan produk hijab dan fashion Muslimah dengan kualitas terbaik dan harga terjangkau.",
            "deskripsi_2"=> "Meningkatkan kreativitas dalam desain untuk memenuhi kebutuhan gaya hidup modern yang tetap sesuai dengan prinsip Islam.",
            "kelebihan_1"=> "Hijab Segi Empat: Tersedia dalam berbagai motif dan bahan, cocok untuk gaya sehari-hari maupun acara spesial.",
            "kelebihan_2"=> "Pashmina Premium: Desain minimalis dengan bahan lembut dan nyaman untuk pemakaian sepanjang hari.",
            "kelebihan_3"=> "Desain Eksklusif: Setiap produk dirancang dengan memperhatikan detail dan tren terbaru.",
            "kelebihan_4"=> "Kualitas Premium: Menggunakan bahan terbaik yang nyaman dipakai dan tahan lama.",
        ]);
    }
}
