<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            "company_name" => "নির্ভয় নিউজ",
            "title"        => "নির্ভয় সত্যের পথে সাহসী সৈনিক",
            "phone"        => "017########",
            "logo"         => "uploads/settings/logo.png"
        ]);
    }
}
