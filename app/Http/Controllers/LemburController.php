<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Lembur;
use App\Models\Karyawan;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('lembur')->get();
        //dd($data);
        return view('Lembur.lembur', ['data' => $data]);
        //return $data;
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function tambah(Request $request)
    { 

        $data = DB::table('karyawan')->get();
        return view('Lembur.tambahlmbr', ['data'=> $data]);

    }
    
    
     public function create(Request $request)
    { 
        $Lembur = Lembur::all();
        return view('Lembur.buatlembur', ['lembur' => $Lembur]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storelembur(Request $request)
    {
        
        // /* Hitung Jam Kerja Karyawan */
        // $mulai           = date('Y-m-d H:i:s',strtotime($request->mulai_lembur));
        // $selesai         = date('Y-m-d H:i:s',strtotime($request->selesai_lembur));
        // $mulai_lembur    = strtotime($selesai);
        // $selesai_lembur  = strtotime($mulai);
        // $diff            = $selesai_lembur - $mulai_lembur;
        // $jam_lembur      = ($diff / (60 * 60));


        /*Hitung Lembu */
        $wkt_masuk = '17:00';
        $mulai_lembur = date('Y-m-d H:i:s',strtotime($wkt_masuk));
        $selesai_lembur = date('Y-m-d H:i:s',strtotime($request->jam_selesai));
        
        $wkt1 = date_create($mulai_lembur);
        $wkt2 = date_create($selesai_lembur);
        $wkt3 = date_diff($wkt1, $wkt2);
        $jam_lembur = $wkt3->h." Jam ".$wkt3->i." Menit";

        //dd($jam_lembur);
        
        $insert = array (
            'id'               => $request->id,
            'nama_kry'         => $request->nm_karyawan,
            'tanggal_lembur'   => $request->tgl,
            'mulai_lembur'     => $request->jam_mulai,
            'selesai_lembur'   => $request->jam_selesai,
            'jumlah'           => $jam_lembur
         );

        // dd($insert);

         DB::table('lembur')->insert($insert);

         return redirect()->route('lembur.index');

        // Lembur::create($request->all());
        // return redirect()->route('lembur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Lembur::find($id);
        return view('lembur.edit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $data = Lembur::find($id);
        // $data->delete();
        // return redirect()->route('lembur.index');
        $data = Lembur::find($id);
        if($data){
            $message = true;
            $data->delete();
            
        }else{
            $message = false;
        }
        return redirect()->route('lembur.index');
    }
}