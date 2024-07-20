<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Profile;
use App\Models\Experience;
use Illuminate\Database\Seeder;
use App\Models\WhyTradersChooseUs;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@stk.com',
                'password' => bcrypt('adminstk123*'),
                'role' => 1,
            ],
        ];

        User::insert($users);

        $profiles = [
            [
                'title' => 'CONNECT YOUR BUSINESS TO A WORLD OF POSSIBILITIES',
                'subtitle' => 'Lorem ipsum dolor sit amet consectetur. Sed dignissim lorem auctor quis.',
                'description' => 'PT Sarana Teknologi Komunikasi aktif di sektor pemerintah dan swasta, memberikan solusi yang menghadirkan teknologi yang lebih baik, lebih cepat, dan lebih maju Solusi PT Sarana Teknologi Komunikasi menggabungkan Aplikasi dan Komunikasi dari berbagai produk dan layanan berkualitas tinggi untuk memenuhi kebutuhan pelanggan. Produk dan layanan yang diberikan PT Sarana Teknologi Komunikasi kepada pelanggannya antara lain Aplikasi Maritim, Aplikasi Video, Komunikasi Suara dan Data melalui Radio, Satelit dan TCP/IP.',
                'footer_description' => 'PT Sarana Teknologi Komunikasi aktif di sektor pemerintah dan swasta, memberikan solusi yang menghadirkan teknologi yang lebih baik, lebih cepat, dan lebih maju Solusi PT Sarana Teknologi Komunikasi menggabungkan Aplikasi dan Komunikasi dari berbagai produk dan layanan berkualitas tinggi untuk memenuhi kebutuhan pelanggan.',
                'visi' => 'Menjadi penyedia tepercaya Global untuk solusi telekomunikasi dan teknologi.',
                'misi' => 'Memberikan pelanggan solusi terintegrasi melalui pemanfaatan teknologi dan telekomunikasi yang unggul.',
                'address' => 'Indonesia Head Office: JL.Letjen S Parman No.107 Jakarta Barat 11440',
                'email' => 'saranatekom@gmail.com',
                'phone_number' => '(021) 5665 - 526',
                'optional_phone_number' => '(021) 5664 - 688',
                'x' => null,
                'instagram' => null,
                'facebook' => null,
                'youtube' => null,
            ],
        ];

        Profile::insert($profiles);

        $whyTradersChooseUs = [
            [
                'icon' => 'fa-regular fa-star',
                'title' => 'Supply Chain Solution',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Sed dignissim lorem',
            ], [
                'icon' => 'fa-regular fa-star',
                'title' => 'End to End Tranportation',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Sed dignissim lorem',
            ], [
                'icon' => 'fa-regular fa-star',
                'title' => 'Contract Logistics',
                'description' => 'Lorem ipsum dolor sit amet consectetur. Sed dignissim lorem',
            ],
        ];

        WhyTradersChooseUs::insert($whyTradersChooseUs);

        $experience = [
            [
                'experience' => 'Pengadaan Rescue Convergent Communication System',
            ], [
                'experience' => 'Pengadaan Global Aeronautical Distress and Safety Monitoring',
            ], [
                'experience' => 'Pekerjaan GIS Land Development',
            ], [
                'experience' => 'Pengembangan Integrated Maritime SAR Surveillance',
            ], [
                'experience' => 'Pengadaan Data Aplikasi dan Informasi Maritim',
            ], [
                'experience' => 'Layanan GPRS Connection Basarnas',
            ], [
                'experience' => 'Pengembangan Marine Satelite Communication System',
            ], [
                'experience' => 'Pengembangan Crisis Management Center',
            ],
        ];

        Experience::insert($experience);
    }
}
