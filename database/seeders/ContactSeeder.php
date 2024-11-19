<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            "name"=> "Amerta Hijab",   
            "description"=> "AmertaHijab adalah brand fashion Muslimah yang mengedepankan kombinasi keanggunan, kesederhanaan, dan kenyamanan. Berdiri sejak 2019, AmertaHijab berkomitmen untuk menghadirkan produk hijab berkualitas tinggi dengan desain elegan yang cocok untuk berbagai kesempatan, baik formal maupun kasual",
            "logo"=> "logo.png",
            "alamat"=> "Jalan A.H. Nasution No. 105, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614",
            "email"=> "amertahijab@gmail.com",
            "telepon"=> "+62 813-2486-0648",
            "maps_embed"=> "maps.com",
        ]);
    }
}
