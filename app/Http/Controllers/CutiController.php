<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use DB;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = cuti::all();

        return view('Cuti.cuti',['data' => $data]);
    }


    public function tambah(Request $request)
    { 

        $data = DB::table('golongan')->get();
        return view('Cuti.tambahcuti', ['data'=> $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = cuti::all();
        return view('Cuti.tambahcuti', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nip     = session()->get('nip');
        $nama    = Karyawan::where('nip',$nip)->value('nama');
        $jabatan = Karyawan::where('nip',$nip)->value('jabatan'); 

        $insert = array (
           // 'id'            => $request->id,
           'nama_karyawan' => $nama,
           'nip'           => $nip,
           'jabatan'       => $jabatan,
           'tanggal_mulai' => $request->tgl_mulai,
           'tgl_selesai'   => $request->tgl_selesai,
           'jumlah'        => $request->jmlh_cuti,
           'status'        => '1',
           'keterangan'    => $request->ket
        );

        //dd($insert);

        DB::table('cuti')->insert($insert);

        return redirect()->route('datacuti');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cuti::where('id',$id)->get();
        $cuti = Cuti::all();
        // dd($data);
        //return $data;
        return view('Cuti.editcuti',['data' => $data, 'cuti' => $cuti]);
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
        $data = Cuti::where('id',$id)
              ->update([
                'nama_karyawan' => $request->nm_karyawan,
                'nip'           => $request->nip,
                'jabatan'       => $request->jabatan,
                'tanggal_mulai' => $request->tgl_mulai,
                'tgl_selesai'   => $request->tgl_selesai,
                'jumlah'        => $request->jmlh_cuti,
                'status'        => '2',
                'keterangan'    => $request->ket
            //    'id'   => $request->jabatan
              ]);
              //return redirect(karyawan.index)->with('toast_success','Data berhasil diupdate');
              return redirect()->route('cuti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Cuti::find($id);
        if($data){
            $message = true;
            //$data->delete();
            $data = Cuti::where('id',$id)
            ->update([
              'status'        => '4',
            ]);
            
        }else{
            $message = false;
        }
        return redirect()->route('cuti.index');
    
    }

    public function datacuti(){

        $nip  = session()->get('nip');
        $data = Cuti::where('nip',$nip)->get(); 
        return view('Cuti.datacuti',['data' => $data]);
    }
    // public function approved($id)
    // {
    //     try {

    //     }catch (\Exception $e) {
    //         \Session::flash('gagal',Se->getMessage{});
    //     }

    //     return redirect()->back;
    // }



    }