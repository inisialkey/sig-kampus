<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use FarhanWazir\GoogleMaps\GMaps;
use GoogleMaps;
use App\Kampus;
use App\User;

class FrontendController extends Controller
{
    public function index()
    {
        $kampus = Kampus::get();
        $user   = User::all();

        $no = 1;
        $kampuslist = $kampus->sortBy('id');
        $config['center'] = '-6.737246, 108.550659';
        $config['zoom'] = 'auto';
        $gmap = new GMaps();
        $gmap->initialize($config);

        foreach ($kampus as $key => $kampus) {
            $marker = array();
            $marker['position'] = $kampus->latitude . ', ' . $kampus->longitude;
            $marker['draggable'] = TRUE;
            $marker['infowindow_content'] =  "<img src='images/kampus/$kampus->gambar' width='120px' height='75px'>" . "<br> <br>" . "<strong>" . "<b>Nama Kampus : </b>" . $kampus->nama_kampus . "<br>" . "<b>Alamat : </b>" . $kampus->alamat . "<br>" . "<b>Telepon : </b>" . $kampus->telepon . "</strong>";
            $marker['icon'] = 'images/lokasi.png';
            $marker['animation'] = 'BOUNCE';
            $gmap->add_marker($marker);

            // $circle = array();
            // $circle['center'] = $kampus->latitude . ', ' . $kampus->longitude;
            // $circle['radius'] = '25';
            // $gmap->add_circle($circle);
        }

        $map = $gmap->create_map();

        return view('frontend/home', compact('map', 'kampus', 'user', 'kampuslist'));
    }

    public function about()
    {
        return view('frontend/about');
    }

    public function contact()
    {
        return view('frontend/contact');
    }
}
