<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posters')->delete();
        
        \DB::table('posters')->insert(array (
            0 => 
            array (
                'id' => 2,
                'main_text' => '<p>I&rsquo;m Ralph Peterson, a twenty-six-year-old UI/UX designer from Los Angeles, CA</p>',
                'small_text' => '<p>Currently I am co-leading a design team at Intense web design studio.</p>',
                'image' => '{"main_text":"<p>I&rsquo;m Ralph Peterson, a twenty-six-year-old UI\\/UX designer from Los Angeles, CA<\\/p>","small_text":"<p>Currently I am co-leading a design team at Intense web design studio.<\\/p>","button_text":"Contact Me","image":"\\/files\\\\images-25-510x593.jpg"}',
                'button_text' => 'Contact Me',
                'created_at' => '2021-08-19 15:30:16',
                'updated_at' => '2021-08-19 14:36:54',
            ),
        ));
        
        
    }
}