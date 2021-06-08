<?php

namespace App\Http\Controllers;
use App\Club;
use App\Workshop;
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
        $clubs = Club::get('categorie');
        $clubs = Club::inRandomOrder()->limit(6)->get();
        return view('welcome', [
            'clubs' => $clubs
        ]);
               
    }
    public function workshop()
    {
        $workshops=Workshop::get('formateur_name');
        $workshops=Workshop::inRandomOrder()->limit(6)->get();
        return view('workshop',[
            'workshops' => $workshops
        ]);


    }
}
