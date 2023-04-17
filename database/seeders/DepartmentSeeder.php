<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = ['Software', 'Support', 'Marketing', 'News', 'Editor'];

        foreach ($departments as $key => $value) {
            Department::create([
                'department_name' => $value,
                'addedBy'          => 1,
                'addedBy'          => 1,
            ]);
        }
    }
}
