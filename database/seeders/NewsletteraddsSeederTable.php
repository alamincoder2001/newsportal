<?php

namespace Database\Seeders;

use App\Models\NewsletterAdd;
use Illuminate\Database\Seeder;

class NewsletteraddsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsletterAdd::create([
            'status' => 'a',
        ]);
    }
}
