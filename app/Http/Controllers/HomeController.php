<?php

namespace App\Http\Controllers;
use App\clubs
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome ()
    {
        $clubs = club::get('club_name');
        $adhrents = adhrent::inRandomOrder()->limit(6)->get();
        return view('welcome' [
            'clubs'=> $clubs,
            'adhrents'=> $adhrents
        ]);
    }
}
