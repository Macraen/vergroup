<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Macraen',
                'email' => 'macraen.dev@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2HNs2g65sV2/aVrdHFHRaORa3pxS6DPMIpdaIhrmTQfMqMPuhF6Ee',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-16 15:36:00',
                'updated_at' => '2021-08-17 15:55:19',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'admin',
                'email' => 'admin@vergroup.company',
                'email_verified_at' => NULL,
                'password' => '$2y$10$i2c9xwPJAZ4e6lwBCssrge9DvnKbNHPAZ5HmWKzgIRx1MwkJYeBUa',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'eVw0peA7ocqJp2EIp56sE1VJvrt30Erl8LUGYa5Ok5L2vjJlWqhYwKBxsart',
                'created_at' => '2021-08-16 15:37:27',
                'updated_at' => '2021-08-16 15:37:27',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Moderator',
                'email' => 'moderator@vergroup.company',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Bs4u2yvyPNo6dFaPzzHTN.wLARwLmklPNbvPyxaiS40zBGH5Tceq6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-17 12:50:04',
                'updated_at' => '2021-08-17 12:50:04',
            ),
        ));
        
        
    }
}