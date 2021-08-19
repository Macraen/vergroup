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
        $skills= Main_page::where('key', 'skills')->first();
        $json = json_decode($skills['value'], true);
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
        $main_skills = Main_page::where('key', 'skills')->first() ?? new Main_page();
        $json_data = array('skills' => $request->skills, 'clients' => $request->clients, 'ico1' => $request->feature_image1, 'ico2' => $request->feature_image2, 'ico3' => $request->feature_image3, 'ico4' => $request->feature_image4);
        $array_data = json_encode($json_data);
        $main_skills->value =  $array_data;
        $main_skills->key = 'skills';
        $main_skills->save();

        return redirect()->back()->withSuccess('Данные успешно обновлено!');
    }

}
