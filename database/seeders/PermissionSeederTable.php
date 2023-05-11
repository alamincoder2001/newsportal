<?php

namespace Database\Seeders;

use App\Models\AdminAccess;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'group_name' => 'dashboard',
                'permission_name' => [
                    'dashboardView'
                ]
            ],
            [
                'group_name' => 'Advertisement',
                'permission_name' => [
                    'advertiseOne',
                    'advertiseTwo',
                    'advertiseThree',
                    'advertiseFour',
                    'advertiseFive'
                ]
            ],
            [
                'group_name' => 'Employee',
                'permission_name' => [
                    'employeeEntry',
                    'employeeList',
                    'employeeEdit'
                ]
            ],
            [
                'group_name' => 'News',
                'permission_name' => [
                    'newsEntry',
                    'newsEdit',
                    'newsList',
                    'pendingNews',
                    'archiveNews',
                ]
            ],
            [
                'group_name' => 'User',
                'permission_name' => [
                    'userEntry',
                    'userAccess'
                ]
            ],
            [
                'group_name' => 'Category',
                'permission_name' => [
                    'categoryEntry',
                ]
            ],
            [
                'group_name' => 'Designation',
                'permission_name' => [
                    'designationEntry',
                ]
            ],
            [
                'group_name' => 'Department',
                'permission_name' => [
                    'departmentEntry',
                ]
            ],
            [
                'group_name' => 'Setting',
                'permission_name' => [
                    'settingUpdate',
                ]
            ],
        ];

        foreach ($permissions as $permission) {
            foreach ($permission['permission_name'] as $permissionName) {
                Permission::create(['permissions' => $permissionName, 'group_name' => $permission['group_name']]);
            }
        }

        $allPermissions = Permission::all();
        foreach ($allPermissions as $perm) {
            AdminAccess::create([
                'admin_id'    => 1,
                'group_name'  => $perm->group_name,
                'permissions' => $perm->permissions,
            ]);
        }
    }
}
