<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main_page;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Main_page::where('key', 'projects')->first();
        $projects = $projects->value;
        return view('admin.main.projects', [
            'projects' => $projects
        ]);
    }


    public function save(Request $request)
    {
        $projects = Main_page::where('key', 'projects')->first() ?? new Main_page();
        $projects->value = array(
            'main_text' => $request->main_text,
            'logo1' => $request->logo1, 'name1' => $request->name1, 'link1' => $request->link1,
            'logo2' => $request->logo2, 'name2' => $request->name2, 'link2' => $request->link2,
            'logo3' => $request->logo3, 'name3' => $request->name3, 'link3' => $request->link3,
            'logo4' => $request->logo4, 'name4' => $request->name4, 'link4' => $request->link4,
            'logo5' => $request->logo5, 'name5' => $request->name5, 'link5' => $request->link5,
            'logo6' => $request->logo6, 'name6' => $request->name6, 'link6' => $request->link6,);
        $projects->key = 'projects';
        $projects->save();

        return redirect()->back()->withSuccess('Данные успешно обновлено!');
    }


}
