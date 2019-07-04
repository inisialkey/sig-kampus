<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use FarhanWazir\GoogleMaps\GMaps;
use App\Kampus;
use App\User;
use Carbon\Carbon;
use Session;
use Auth;
use Mapper;
use Excel;

class KampusController extends Controller
{
    public function contruct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->level == 'level') {
            Alert::info('Oopss..', 'Anda dilarang masuk!');
            return redirect()->to('/');
        }

        $datas = Kampus::get();
        return view('kampus.index', compact('datas'));
    }

    public function create()
    {
        if (Auth::user()->level == 'level') {
            Alert::info('Oopss..', 'Anda dilarang masuk!');
            return redirect()->to('/');
        }
        Mapper::map(-6.7427761, 108.5190192, ['center' => true, 'marker' => false, 'zoom' => 15, 'fullscreenControl' => false, 'cluster' => true]);
        Mapper::marker(-6.7427761, 108.5190192, ['draggable' => true, 'eventDragEnd' => 'console.log(event.latLng.lat()); console.log(event.latLng.lng());']);
        return view('kampus.create');
    }

    public function store(Request $request)
    {
        $count = Kampus::where('nama_kampus', $request->input('nama_kampus'))->count();
        if ($count > 0) {
            Session::flash('message', 'Already Exist!');
            Session::flash('message_type', 'danger');
            return redirect()->to('kampus');
        }

        $this->validate($request, [
            'nama_kampus'       => 'required|string|max:255|unique:kampus',
            'alamat'            => 'required|string|max:255',
            'latitude'          => 'required|string|max:20|',
            'longitude'         => 'required|string|max:20|',
            'telepon'           => 'required|string|max:15',
        ]);

        if ($request->file('gambar') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '-' . $dt->format('Y-m-d-H-i-s') . '.' . $acak;
            $request->file('gambar')->move("images/kampus", $fileName);
            $gambar = $fileName;
        }

        Kampus::create([
            'nama_kampus' => $request->input('nama_kampus'),
            'alamat' => $request->input('alamat'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'telepon' => $request->input('telepon'),
            'gambar' => $gambar
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');
        return redirect()->route('kampus.index');
    }

    public function show($id)
    {
        if ((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
            Alert::info('Oopss..', 'Anda dilarang masuk!');
            return redirect()->to('/');
        }

        $data = Kampus::findOrFail($id);
        $lat = DB::table('kampus')->where('id', $id)->value('latitude');
        $long = DB::table('kampus')->where('id', $id)->value('longitude');
        $nama_kampus = DB::table('kampus')->where('id', $id)->value('nama_kampus');
        $alamat = DB::table('kampus')->where('id', $id)->value('alamat');

        Mapper::map($lat, $long, ['center' => true, 'marker' => false, 'zoom' => 16, 'fullscreenControl' => false, 'cluster' => true]);
        Mapper::informationWindow($lat, $long, 'Nama : ' . $nama_kampus . '<br>' . 'Alamat : ' . $alamat, ['maxWidth' => 300, 'title' => 'Title']);
        return view('kampus.show', compact('data'));
    }

    public function edit($id)
    {
        if ((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
            Alert::info('Oopss..', 'Anda dilarang masuk!');
            return redirect()->to('/');
        }

        $data = Kampus::findOrFail($id);

        return view('kampus.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data_kampus = Kampus::findOrFail($id);

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '-' . $dt->format('Y-m-d-H-i-s') . '.' . $acak;
            $request->file('gambar')->move("images/kampus", $fileName);
            $data_kampus->gambar = $fileName;
        }

        $data_kampus->nama_kampus = $request->input('nama_kampus');
        $data_kampus->alamat = $request->input('alamat');
        $data_kampus->latitude = $request->input('latitude');
        $data_kampus->longitude = $request->input('longitude');

        $data_kampus->update();

        Session::flash('message', 'Berhasil diubah!');
        Session::flash('message_type', 'success');
        return redirect()->to('kampus');
    }

    public function destroy($id)
    {
        Kampus::find($id)->delete();
        alert()->success('Berhasil', 'Data telah dihapus!');
        return redirect()->route('kampus.index');
    }

    //UNTUK DIRECTION
    public function direction($id)
    {
        $kampus = Kampus::all();
        $user = User::all();
        $kampus = DB::table('kampus')->where('id', '=', $id)->get();
        foreach ($kampus as $kampus) {
            $config['center'] = 'auto';
            $config['zoom'] = 'auto';
            $config['directions'] = TRUE;
            $config['directionsStart'] = 'auto';
            $config['directionsEnd'] = $kampus->latitude . ', ' . $kampus->longitude;
            $config['directionsDivID'] = 'directionsDiv';

            $circle = array();
            $circle['center'] = $kampus->latitude . ', ' . $kampus->longitude;
            $circle['radius'] = '25';
            $gmap = new GMaps();
            $gmap->add_circle($circle);
        }

        $gmap->initialize($config);

        $map = $gmap->create_map();

        return view('kampus.direction', compact('map', 'user', 'kampus'));
    }

    public function format()
    {
        $data = [['nama_kampus' => null, 'alamat' => null, 'latitude' => null, 'longitude' => null, 'telepon' => null]];
        $fileName = 'format-data-kampus';


        $export = Excel::create($fileName . date('Y-m-d_H-i-s'), function ($excel) use ($data) {
            $excel->sheet('kampus', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        });

        return $export->download('xlsx');
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'importKampus' => 'required'
        ]);

        if ($request->hasFile('importKampus')) {
            $path = $request->file('importKampus')->getRealPath();

            $data = Excel::load($path, function ($reader) { })->get();
            $a = collect($data);

            if (!empty($a) && $a->count()) {
                foreach ($a as $key => $value) {
                    $insert[] = [
                        'nama_kampus' => $value->nama_kampus,
                        'alamat' => $value->alamat,
                        'latitude' => $value->latitude,
                        'longitude' => $value->longitude,
                        'telepon' => $value->telepon,
                        'gambar' => NULL
                    ];

                    Kampus::create($insert[$key]);
                }
            };
        }
        alert()->success('Berhasil.', 'Data telah diimport!');
        return back();
    }
}
