<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main_page;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Main_page::where('key', 'skills')->first();
        $json = $skills->value;
        return view('admin.main.skills', [
            'json' => $json
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $main_poster = Main_page::where('key', 'skills')->first() ?? new Main_page();
        $main_poster->value =  array('skills' => $request->skills, 'clients' => $request->clients, 'ico1' => $request->feature_image1, 'ico2' => $request->feature_image2, 'ico3' => $request->feature_image3, 'ico4' => $request->feature_image4);
        $main_poster->key = 'skills';
        $main_poster->save();

        return redirect()->back()->withSuccess('Данные успешно обновлено!');
    }

}
