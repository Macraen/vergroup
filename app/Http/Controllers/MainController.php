<?php

namespace App\Http\Controllers;

use App\Models\Main_page;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        $cExp = count($experience)/2; $intExp = 0;

        $projects = Main_page::where('key', 'projects')->first();
        $projects = $projects['value'];
        $projects = array_diff($projects, array(''));
        $cProj = count($projects)/3; $intProj = 0;

//        $role = Role::findByName('admin');
//        $permissions = [
//            'permission_admin_panel',
//        ];
//        foreach ($permissions as $permission)   {
//            $role->givePermissionTo($permission);
//        }

//        foreach ($permissions as $permission)   {
//            Permission::create([
//                'name' => $permission
//            ]);
//        }

        return view('welcome', [
            'poster' => $poster,
            'skills' => $skills,
            'experience' => $experience,
            'intExp' => $intExp,
            'cExp' => $cExp,
            'cProj' => $cProj,
            'intProj' => $intProj,
            'projects' => $projects

        ]);
    }
}
