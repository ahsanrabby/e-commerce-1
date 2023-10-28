<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        //create Roles
        $roleSuperAdmin=Role::create(['name'=>'superadmin']);
        $roleAdmin=Role::create(['name'=>'admin']);
        $roleEditor=Role::create(['name'=>'editor']);
        $roleUser=Role::create(['name'=>'user']);






        //permission LIst as Array

        $permissions =[

            ['group_name'=>'dashboard',
                'permissions'=>
                    [
                    'dashboard'
                    ]

            ],

            ['group_name'=>'category',
                'permissions'=>[
                    //Category Permission
                    'category.add',
                    'category.new',
                    'category.manage',
                    'category.edit',
                    'category.delete',
                    'category.update',

                ]

            ],
            ['group_name'=>'sub-category',
                'permissions'=>[
                    //Sub-Category Permission
                    'sub-category.add',
                    'sub-category.new',
                    'sub-category.manage',
                    'sub-category.edit',
                    'sub-category.update',
                    'sub-category.delete',

                ]

            ],
            ['group_name'=>'brand',
                'permissions'=>[
                    //Brand Permission
                    'brand.add',
                    'brand.new',
                    'brand.manage',
                    'brand.edit',
                    'brand.update',
                    'brand.delete',

                ]

            ],
            ['group_name'=>'unit',
                'permissions'=>[
                    //Unit Permission
                    'unit.add',
                    'unit.new',
                    'unit.manage',
                    'unit.edit',
                    'unit.update',
                    'unit.delete',

                ]

            ],
            ['group_name'=>'product',
                'permissions'=>[
                    //Product Permission
                    'product.add',
                    'product.new',
                    'product.manage',
                    'product.edit',
                    'product.update',
                    'product.delete',

                ]

            ],
            ['group_name'=>'admin',
                'permissions'=>[
                    //Admin Permission
                    'admin.add',
                    'admin.manage',
                    'admin.view',
                    'admin.edit',
                    'admin.update',
                    'admin.delete',

                ]

            ],
            ['group_name'=>'roles',
                'permissions'=>[
                    //Role Permission
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.update',
                    'role.delete',


                ]

            ],
            ['group_name'=>'profile',
                'permissions'=>[
                    //Profile permission

                    'profile.view',
                    'profile.edit'
                ]

            ],

        ];

        //Assign Permissions

        foreach ($permissions as $permissionName)
//        {
//            $permission = Permission::create(['name' => $permissionName]);
//            $roleSuperAdmin->givePermissionTo($permission);
//            $permission->assignRole($roleSuperAdmin);
//        }

//            for ($i = 0; $i < count($permissions); $i++) {
//                $permissionsGroup = $permissions[$i]['group_name'];
//
//                for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
//                    $permissionName = $permissions[$i]['permissions'][$j];
//
//                    $permission = Permission::create([
//                        'name' => $permissionName,
//                        'group_name' => $permissionsGroup,
//                    ]);
//
//                    $roleSuperAdmin->givePermissionTo($permission);
//                    $permission->assignRole($roleSuperAdmin);
//                }
//            }



//            foreach ($permissions as $permissionItem) {
//                $permissionsGroup = $permissionItem['group_name'];
//
//                foreach ($permissionItem['permissions'] as $permissionName) {
//                    $permission = Permission::create([
//                        'name' => $permissionName,
//                        'group_name' => $permissionsGroup,
//                    ]);
//
//                    $roleSuperAdmin->givePermissionTo($permission);
//                    $permission->assignRole($roleSuperAdmin);
//                }
//            }


//            for($i=0; $i< count($permissions); $i++ ){
//                $permissionsGroup = $permissions[$i]['group_name'];
//                for($j =0; $j<count($permissions[$i]['permissions']); $j++){
//                    $permissions =Permission::create(['name'=>$permissions[$i]['permissions'][$j],'group_name'=>$permissionsGroup]);
//                    $roleSuperAdmin->givePermissionTo($permissions);
//                    $permissions->assignRole($roleSuperAdmin);
//                }
//            }




            foreach ($permissions as $permissionItem) {
                $permissionsGroup = $permissionItem['group_name'];

                foreach ($permissionItem['permissions'] as $permissionName) {
                    $permission = Permission::create([
                        'name' => $permissionName,
                        'group_name' => $permissionsGroup,
                    ]);

                    $roleSuperAdmin->givePermissionTo($permission);
                    $permission->assignRole($roleSuperAdmin);
                }
            }

    }

}


