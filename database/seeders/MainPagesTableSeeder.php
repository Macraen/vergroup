<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MainPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('main_pages')->delete();
        
        \DB::table('main_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'value' => '{"skills":"<h2>UI\\/UX design, Application design, UX research, Visual communication, Prototyping, Wireframing, HTML\\/CSS\\/JavaScript<\\/h2>","clients":"<h2>Artworx, Mito, Maironti, Bikerist, Fibrolo, Decoroto, Drankso.<\\/h2>","ico1":"\\/files\\\\logo-07-64x64.png","ico2":"\\/files\\\\logo-08-64x64.png","ico3":"\\/files\\\\logo-09-64x64.png","ico4":"\\/files\\\\logo-10-64x64.png"}',
                'key' => 'skills',
                'created_at' => '2021-08-19 14:52:14',
                'updated_at' => '2021-08-19 15:59:17',
            ),
            1 => 
            array (
                'id' => 5,
                'value' => '{"main_text":"<p>Im Ralph Peterson, a twenty-six-year-old UI\\\\UX designer from Los Angeles, CA<\\/p>","small_text":"<p>Currently I am co-leading a design<br \\/>team at Intense web design studio.<\\/p>","button_text":"Contact Me","image":"\\/files\\\\images-25-510x593.jpg"}',
                'key' => 'poster',
                'created_at' => '2021-08-20 13:16:06',
                'updated_at' => '2021-08-20 18:26:59',
            ),
            2 => 
            array (
                'id' => 6,
                'value' => '{"experience_text1":"<p>LA Web Studio,<br \\/>Junior Designer<\\/p>\\r\\n<div id=\\"gtx-trans\\" style=\\"position: absolute; left: -66px; top: -12px;\\">\\r\\n<div class=\\"gtx-trans-icon\\">&nbsp;<\\/div>\\r\\n<\\/div>","year_experience1":"2012","experience_text2":"<p>Xtra Web,<br \\/>UX Designer<\\/p>","year_experience2":"2014","experience_text3":"<p>Pixx Creative Studio,<br \\/>Leading UX designer<\\/p>","year_experience3":"2017","experience_text4":"<p>ZGP Web Agency,<br \\/>Product Designer<\\/p>","year_experience4":"2018","experience_text5":"<p>Intense,<br \\/>Leading UI\\/UX designer<\\/p>","year_experience5":"2019","experience_text6":null,"year_experience6":null,"experience_text7":null,"year_experience7":null,"experience_text8":null,"year_experience8":null}',
                'key' => 'experience',
                'created_at' => '2021-08-20 14:45:56',
                'updated_at' => '2021-08-20 14:45:56',
            ),
            3 => 
            array (
                'id' => 7,
                'value' => '{"main_text":"<p><br \\/>Let&rsquo;s talk about your project and how I can help you. Even if you just want to chat about your future web project, feel free to get in touch with me.<\\/p>","email":"macraen.dev@gmail.com"}',
                'key' => 'contact',
                'created_at' => '2021-08-21 15:33:43',
                'updated_at' => '2021-08-21 15:33:43',
            ),
            4 => 
            array (
                'id' => 8,
                'value' => '{"main_text":"<h2>I have designed dozens of appealing interfaces for websites and web apps. Take a look at my projects below.<\\/h2>","logo1":"\\/files\\\\partner-1-inverse-180x49.png","name1":"Website interface design","link1":"https:\\/\\/rozetka.com.ua\\/xiaomi_haylougt6bk\\/p306155188\\/","logo2":"\\/files\\\\partner-2-inverse-133x38.png","name2":"UX design","link2":"https:\\/\\/rozetka.com.ua\\/xiaomi_haylougt6bk\\/p306155188\\/","logo3":"\\/files\\\\partner-3-inverse-180x45.png","name3":"Motion design","link3":"https:\\/\\/rozetka.com.ua\\/xiaomi_haylougt6bk\\/p306155188\\/","logo4":"\\/files\\\\partner-4-inverse-107x31.png","name4":"Web application UI design","link4":"https:\\/\\/rozetka.com.ua\\/xiaomi_haylougt6bk\\/p306155188\\/","logo5":null,"name5":null,"link5":null,"logo6":null,"name6":null,"link6":null}',
                'key' => 'projects',
                'created_at' => '2021-08-21 17:11:07',
                'updated_at' => '2021-08-21 17:59:04',
            ),
        ));
        
        
    }
}