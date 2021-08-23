<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'user_create',
                'guard_name' => 'web',
                'created_at' => '2021-08-22 14:07:45',
                'updated_at' => '2021-08-22 14:07:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user_edit',
                'guard_name' => 'web',
                'created_at' => '2021-08-22 14:07:45',
                'updated_at' => '2021-08-22 14:07:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'user_show',
                'guard_name' => 'web',
                'created_at' => '2021-08-22 14:07:45',
                'updated_at' => '2021-08-22 14:07:45',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'user_delete',
                'guard_name' => 'web',
                'created_at' => '2021-08-22 14:07:45',
                'updated_at' => '2021-08-22 14:07:45',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'main_edit',
                'guard_name' => 'web',
                'created_at' => '2021-08-22 14:07:45',
                'updated_at' => '2021-08-22 14:07:45',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'permission_admin_panel',
                'guard_name' => 'web',
                'created_at' => '2021-08-22 14:47:57',
                'updated_at' => '2021-08-22 14:47:57',
            ),
        ));
        
        
    }
}