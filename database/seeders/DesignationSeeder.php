<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations = ['Manager', 'Developer', 'Sr. Developer', 'Jr. Developer', 'Executive'];

        foreach ($designations as $key => $value) {
            Designation::create([
                'designation_name' => $value,
                'addedBy'          => 1,
            ]);
        }
    }
}
