<?php

namespace App\Http\Controllers;

use App\Models\Main_page;
use App\Models\Poster;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $poster = Main_page::where('key', 'poster')->first();
        $poster = json_decode($poster['value'], true);
        return view('welcome', [
            'poster' => $poster
        ]);
    }
}
