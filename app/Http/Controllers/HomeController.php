<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Homecontroller extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = \Auth::user();
        return view('questions.question_create_answer',['user'=>$user,]);
}
}
