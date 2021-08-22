<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main_page;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = Main_page::where('key', 'experience')->first();
        $json = $experience->value;
        return view('admin.main.experience',[
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
        $main_skills = Main_page::where('key', 'experience')->first() ?? new Main_page();
        $main_skills->value = array(
            'experience_text1' => $request->experience_text1, 'year_experience1' => $request->year_experience1,
            'experience_text2' => $request->experience_text2, 'year_experience2' => $request->year_experience2,
            'experience_text3' => $request->experience_text3, 'year_experience3' => $request->year_experience3,
            'experience_text4' => $request->experience_text4, 'year_experience4' => $request->year_experience4,
            'experience_text5' => $request->experience_text5, 'year_experience5' => $request->year_experience5,
            'experience_text6' => $request->experience_text6, 'year_experience6' => $request->year_experience6,
            'experience_text7' => $request->experience_text7, 'year_experience7' => $request->year_experience7,
            'experience_text8' => $request->experience_text8, 'year_experience8' => $request->year_experience8);
        $main_skills->key = 'experience';
        $main_skills->save();

        return redirect()->back()->withSuccess('Данные успешно обновлено!');
    }

}
