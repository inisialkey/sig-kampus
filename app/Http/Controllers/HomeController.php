<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use FarhanWazir\GoogleMaps\GMaps;
use GoogleMaps;
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
            $marker['infowindow_content'] = '<strong>' . '<b>Nama Kampus : </b>' . $kampus->nama_kampus . '<br>' . '<b>Alamat : </b>' . $kampus->alamat . '<br>' . '<b>Telepon : </b>' . $kampus->telepon . '</strong>';
            $marker['animation'] = 'BOUNCE';
            $gmap->add_marker($marker);

            // $circle = array();
            // $circle['center'] = $kampus->latitude . ', ' . $kampus->longitude;
            // $circle['radius'] = '25';
            // $gmap->add_circle($circle);
        }

        $map = $gmap->create_map();

        return view('home', compact('map', 'kampus', 'user', 'kampuslist'));
    }

    //DETEKSI LOKASI
    public function geolocation()
    {
        $kampus = Kampus::all();
        $user = User::all();
        $config = array();
        $config['center'] = 'auto';
        $config['zoom'] = 16;
        $config['onboundschanged'] = 'if (!centreGot) {
			var mapCentre = map.getCenter();
			marker_0.setOptions({
				position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
			});
		}
        centreGot = true;';
        $gmap = new GMaps();
        $gmap->initialize($config);

        $marker = array();
        $marker['animation'] = 'BOUNCE';
        $gmap->add_marker($marker);

        $circle = array();
        $circle['center'] = 'auto';
        $circle['radius'] = '25';
        $gmap->add_circle($circle);

        $map = $gmap->create_map();

        return view('geolocation', compact('map', 'kampus', 'user'));
    }
}
