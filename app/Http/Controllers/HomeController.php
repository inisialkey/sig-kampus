<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use App\Kampus;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kampus = Kampus::get();
        $user   = User::get();

        Mapper::map(-6.7427761, 108.5190192, ['center' => true, 'marker' => false, 'zoom' => 13, 'fullscreenControl' => false, 'cluster' => true]);
        Mapper::informationWindow(-6.728889, 108.545723, 'UNSWAGATI', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.736021, 108.535179, 'UNTAG', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.709861, 108.536623, 'UMC', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.713407, 108.566586, 'UNU', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.716678, 108.533660, 'STIBA', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.736587, 108.529376, 'FARMASI YPIB', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(6.719445, 108.537576, 'STIKES', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.741599, 108.534587, 'STIKES MAHARDIKA', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.712690, 108.531209, 'STIKOM', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.712852, 108.532191, 'STIE', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.740573, 108.543303, 'STTC', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.712433, 108.539870, 'STIE YASMI', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.733730, 108.553111, 'CIC', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.736525, 108.527098, 'IKMI', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.747798, 108.481286, 'AN NASHER', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.712453, 108.540766, 'AKPER MUHAMMADIYAH', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.737857, 108.554936, 'AKMI', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.709500, 108.531396, 'LP3I', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        Mapper::informationWindow(-6.713233, 108.543793, 'BBC', ['maxWidth'=> 300, 'title' => 'Title', 'marker' => true]);
        return view('home', compact('kampus', 'user'));
    }
}
