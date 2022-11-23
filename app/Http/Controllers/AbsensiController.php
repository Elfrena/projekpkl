<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Absensi;
use DB;

class AbsensiController extends Controller
{
    public function index()
    {
        $data = DB::table('Absensi')->get();
        return view('Absensi.Absensi', ['data' => $data]);
    }

    public function create()
    {
        //$absensi = Absensi::all();
        $data = DB::table('karyawan')->get();
        return view('Absensi.tambahabs', ['data'=> $data]);
        //return view('Absensi.tambahabs', ['Absensi' => $absensi]);
    }

    public function absensistore(Request $request)
    {
        
        /* Hitung Jam Kerja Karyawan */
        $masuk   = date('Y-m-d H:i:s',strtotime($request->jam_masuk));
        $pulang  = date('Y-m-d H:i:s',strtotime($request->jam_plg));
        $jam_pulang = strtotime($pulang);
        $jam_masuk  = strtotime($masuk);
        $diff       = $jam_pulang - $jam_masuk;
        $jam_kerja  = ($diff / (60 * 60));

        /*Hitung Terlambat */
        $wkt_masuk = '09:00';
        $msk_kerja = date('Y-m-d H:i:s',strtotime($wkt_masuk));
        $wkt_absen = date('Y-m-d H:i:s',strtotime($request->jam_masuk));
        
        $wkt1 = date_create($msk_kerja);
        $wkt2 = date_create($wkt_absen);
        $wkt3 = date_diff($wkt1, $wkt2);
        $terlambat = $wkt3->h." Jam ".$wkt3->i." Menit";

        //dd($terlambat);

        $insert = array (
            'id'            => $request->id,
            'nama'          => $request->nm_karyawan,
            'tgl_absen'     => $request->tgl,
            'jam_masuk'     => $request->jam_masuk,
            'jam_pulang'    => $request->jam_plg,
            'terlambat'     => $terlambat,
            'jam_kerja'     => $jam_kerja
        );


        DB::table('Absensi')->insert($insert);
        return redirect()->route('absensi.index');
    }

    public function show($id)
    {
        $data = Absensi::find($id);
        //dd($data);
        return view('Absensi.edit',compact('data'));
    }

    public function edit($id)
    {
         /* Cari Data Untuk Di Edit */
         $data = Absensi::find($id);
       
         //return view('absensi.edit');
         return $data;
    }

    public function update(Request $request, $id)
    {
        $update = [
            'nama'          => $request->nm_karyawan,
            'tgl_absen'     => $request->tgl,
            'jam_masuk'     => $request->jam_masuk,
            'jam_pulang'    => $request->jam_plg,
            'terlambat'     => $request->terlambat,
           'jam_kerja'     => $request->jam_kerja
        ];
        User::where('id', $id)->update($update);
        $msg = "User Updated successful! ";
        return redirect('Absensi.index')->with('msg', $msg); 

        $timezone = 'Asia/Jakarta';
        $data = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date-> format('Y-m-d');
        $localtime = $date->format('H:i:s');


    }

    public function destroy($id)
    {
        // dd($id);
        $data = Absensi::find($id);
        if($data){
            $message = true;
            $data->delete();
            
        }else{
            $message = false;
        }
        return redirect()->route('absensi.index');
    }

    

}