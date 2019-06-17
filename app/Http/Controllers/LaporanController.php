<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kampus;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Excel;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kampus()
    {
        return view('laporan.kampus');
    }

    public function kampusPDF()
    {
        $datas  = Kampus::all();
        $pdf    = PDF::loadView('laporan.kampus_pdf', compact('datas'));
        return $pdf->download('laporan_kampus_' . date('Y-m-d_H-i-s') . '.pdf');
    }

    public function kampusExcel(Request $request)
    {
        $nama = 'laporan_kampus_' . date('Y-m-d_H-i-s');
        Excel::create($nama, function ($excel) use ($request) {
            $excel->sheet('Laporan Data Kampus', function ($sheet) use ($request) {

                $sheet->mergeCells('A1:H1');

                // $sheet->setAllBorders('thin');
                $sheet->row(1, function ($row) {
                    $row->setFontFamily('Calibri');
                    $row->setFontSize(11);
                    $row->setAlignment('center');
                    $row->setFontWeight('bold');
                });

                $sheet->row(1, array('LAPORAN DATA Kampus'));

                $sheet->row(2, function ($row) {
                    $row->setFontFamily('Calibri');
                    $row->setFontSize(11);
                    $row->setFontWeight('bold');
                });

                $datas = Kampus::all();

                // $sheet->appendRow(array_keys($datas[0]));
                $sheet->row($sheet->getHighestRow(), function ($row) {
                    $row->setFontWeight('bold');
                });

                $datasheet = array();
                $datasheet[0]  =   array("NO", "NAMA KAMPUS", "ALAMAT", "LATITUDE",  "LONGITUDE", "TELEPON");
                $i = 1;

                foreach ($datas as $data) {

                    // $sheet->appendrow($data);
                    $datasheet[$i] = array(
                        $i,
                        $data['nama_kampus'],
                        $data['alamat'],
                        $data['latitude'],
                        $data['longitude'],
                        $data['telepon']
                    );

                    $i++;
                }

                $sheet->fromArray($datasheet);
            });
        })->export('xls');
    }
}
