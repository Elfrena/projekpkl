<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lemburan;
use DB;
use DateTime;
use DateTimeZone;

class LemburanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$data = cuti::all();

        return view('lemburan.mulai');

    }

    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $lemburan = Lemburan::where([
            //['user_id','=',auth()->user()],
            ['id','=',auth()->user()],
            ['tgl','=',$tanggal],
        ])->first();
        if ($lemburan){
            dd("sudah ada");
        }else{
            Lemburan::create([
                //'user_id' => auth()->user(),
                'id' => auth()->user(),
                'tgl' => $tanggal,
                'jammasuk' => $localtime,
            ]);
        }

        return redirect('lemburan.index');
    }



    }