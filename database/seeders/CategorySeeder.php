<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();

        $categories = ['শিক্ষা', 'বিনোদন', 'জাতীয়', 'খেলাধুলা', 'আন্তর্জাতিক খবর', 'নগর জীবন', 'কক্সবাজার জেলা', 'হেলথ কর্নার', 'কর্পোরেট কর্নার', 'ক্যাম্পাস', 'চাকরি', 'জীবন ধারা', 'ইসলাম', 'বিজ্ঞান', 'মুক্তমঞ্চ', 'শিল্প বাণিজ্য', 'হোম স্লাইডার', 'ফোকাস', 'হাইলাইটস', 'শিরোনাম', 'হোম টপ রাইট'];

        foreach ($categories as $key => $value) {
            $ismenu = '';
            if ($key < 7) {
                $ismenu = 'true';
            } else if ($key > 6 && $key < 16) {
                $ismenu = 'false';
            } else {
                $ismenu = 'others';
            }

            Category::create([
                'name'    => $value,
                'slug'    => $this->make_slug($value),
                'image'   => '',
                'is_menu' => $ismenu,
            ]);
        }
    }

    function make_slug($string)
    {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
