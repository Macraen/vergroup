<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main_page;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function index()
    {
        $poster = Main_page::where('key', 'poster')->first();
        $json = json_decode($poster['value'], true);
        return view('admin.main.poster', [
            'json' => $json
        ]);
    }

    public function save(Request $request)
    {
        $main_poster = Main_page::where('key', 'poster')->first() ?? new Main_page();
        $json_data = array('main_text' => $request->main_text, 'small_text' => $request->small_text, 'button_text' => $request->button_text, 'image' => $request->feature_image);
        $array_data = json_encode($json_data);
        $main_poster->value =  $array_data;
        $main_poster->key = 'poster';
        $main_poster->save();

        return redirect()->back()->withSuccess('Данные успешно обновлено!');
    }
}
