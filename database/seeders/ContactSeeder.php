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
            "description"=> "AmertaHijab is a Muslimah fashion brand that emphasizes a combination of elegance, simplicity, and comfort. Established in 2019, AmertaHijab is committed to presenting high-quality hijab products with elegant designs that are suitable for various occasions, both formal and casual.",
            "logo"=> "logo.png",
            "alamat"=> "Jln. Rancakendal 2.Kp.jelegong, RT.05/RW.05, Sukamulya, Kabupaten Bandung, Jawa Barat 40394",
            "email"=> "amertahijab@gmail.com",
            "telepon"=> "+62 85333385123",
            "maps_embed"=> "!1m18!1m12!1m3!1d3960.3289082745264!2d107.78576937577313!3d-6.970468768254112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c5242f86a9db%3A0x69dfd30d9feb1608!2sAmerta%20Hijab!5e0!3m2!1sid!2sid!4v1732077987640!5m2!1sid!2sid",
        ]);
    }
}
