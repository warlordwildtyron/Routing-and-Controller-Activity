<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = ['PHP', 'Laravel', 'JavaScript', 'Vue.js'];
        return view('skills', ['skills' => $skills]);
    }
}
