<?php

namespace App\Http\Controllers;

use App\Models\Main_page;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $poster = Main_page::where('key', 'poster')->first();
        $poster = json_decode($poster['value'], true);
        $skills = Main_page::where('key', 'skills')->first();
        $skills = json_decode($skills['value'], true);
        return view('welcome', [
            'poster' => $poster,
            'skills' => $skills
        ]);
    }
}
