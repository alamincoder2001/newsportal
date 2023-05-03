<?php

namespace Database\Seeders;

use App\Models\AdvertiseFive;
use App\Models\AdvertiseFour;
use App\Models\AdvertiseOne;
use App\Models\AdvertiseThree;
use App\Models\AdvertiseTwo;
use Illuminate\Database\Seeder;

class AdvertiseOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdvertiseOne::create([
            'title'  => "Title here",
            'url'    => "https://www.youtube.com",
            'image'  => '/1200x200.jpg',
            'status' => 'active',
        ]);
        AdvertiseTwo::create([
            'title'  => "Title here",
            'url'    => "https://www.youtube.com",
            'image'  => '/1200x300.jpg',
            'status' => 'active',
        ]);
        AdvertiseThree::create([
            'title'  => "Title here",
            'url'    => "https://www.youtube.com",
            'image'  => '/600x600.jpg',
            'status' => 'active',
        ]);
        AdvertiseFour::create([
            'title'  => "Title here",
            'url'    => "https://www.youtube.com",
            'image'  => '/600x1200.jpg',
            'status' => 'active',
        ]);
        AdvertiseFive::create([
            'title'  => "Title here",
            'url'    => "https://www.youtube.com",
            'image'  => '/600x300.jpg',
            'status' => 'active',
        ]);
    }
}
