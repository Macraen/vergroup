<?php

namespace App\Http\Controllers;

use App\Models\Main_page;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $poster = Main_page::where('key', 'poster')->first();
        $poster = $poster['value'];
        $skills = Main_page::where('key', 'skills')->first();
        $skills = $skills['value'];
        $experience = Main_page::where('key', 'experience')->first();
        $experience = $experience['value'];
        $experience = array_diff($experience, array(''));
        $int = 0;
        $count = count($experience)/2;
        return view('welcome', [
            'poster' => $poster,
            'skills' => $skills,
            'experience' => $experience,
            'int' => $int,
            'count' => $count
        ]);
    }
}
