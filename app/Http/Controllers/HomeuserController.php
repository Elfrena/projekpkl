<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeuserController extends Controller
{
    //
    public function index()
    {
        $user = session()->get('nama');
        
        return view('homeuser',['user' => $user]);

        // $user = Auth::user()->id;
        // $user = Artikel::paginate(10);
        // return view('homeuser', ['artikels' => $user]);
    }
}