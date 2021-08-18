<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Poster;

class PosterController extends Controller
{
    public function index()
    {
        return view('admin.main.poster');
    }

    public function save(Request $request)
    {
        $poster = Poster::where('id', '1')->first();
        $poster->main_text = $request->main_text;
        $poster->small_text = $request->small_text;
        $poster->button_text = $request->button_text;
        $poster->save();
        return redirect()->back()->withSuccess('Данные успешно обновлено!');
    }
}
