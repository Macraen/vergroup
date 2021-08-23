<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'user',
                'guard_name' => 'web',
                'created_at' => '2021-08-16 15:20:58',
                'updated_at' => '2021-08-16 15:20:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2021-08-16 15:22:59',
                'updated_at' => '2021-08-16 15:22:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'moderator',
                'guard_name' => 'web',
                'created_at' => '2021-08-16 15:23:06',
                'updated_at' => '2021-08-16 15:23:06',
            ),
        ));
        
        
    }
}