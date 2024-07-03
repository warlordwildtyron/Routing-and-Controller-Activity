<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Benavente, Patrick T ',
            'description' => 'An IT student in UC.'
        ];
        return view('about-me', $data);
    }
}
