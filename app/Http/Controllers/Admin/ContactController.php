<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main_page;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Main_page::where('key', 'contact')->first();
        $contact = $contact->value;
        return view('admin.main.contact', [
            'contact' => $contact
        ]);
    }


    public function save(Request $request)
    {
        $contact= Main_page::where('key', 'contact')->first() ?? new Main_page();
        $contact->value = array('main_text' => $request->main_text, 'email' => $request->email,);
        $contact->key = 'contact';
        $contact->save();

        return redirect()->back()->withSuccess('Данные успешно обновлено!');
    }

}
