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
            'title'    => "Title here",
            'url'    => "https://www.youtube.com",
            'image'   => '/noImage.jpg',
        ]);
        AdvertiseTwo::create([
            'title'    => "Title here",
            'url'    => "https://www.youtube.com",
            'image'   => '/noImage.jpg',
        ]);
        AdvertiseThree::create([
            'title'    => "Title here",
            'url'    => "https://www.youtube.com",
            'image'   => '/noImage.jpg',
        ]);
        AdvertiseFour::create([
            'title'    => "Title here",
            'url'    => "https://www.youtube.com",
            'image'   => '/noImage.jpg',
        ]);
        AdvertiseFive::create([
            'title'    => "Title here",
            'url'    => "https://www.youtube.com",
            'image'   => '/noImage.jpg',
        ]);
    }
}
