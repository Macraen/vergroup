<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $poster = Poster::all()->first();
        return view('welcome', [
            'poster' => $poster
        ]);
    }
}
