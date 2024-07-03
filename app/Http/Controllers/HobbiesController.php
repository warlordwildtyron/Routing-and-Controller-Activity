<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $hobbies = ['Reading', 'Gaming', 'Hiking'];
        return view('hobbies', ['hobbies' => $hobbies]);
    }
}
