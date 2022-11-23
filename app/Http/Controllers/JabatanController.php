<?php

namespace App\Http\Controllers;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use DB;

class JabatanController extends Controller
{
    public function index()
    {
        //
        $data = DB::table('golongan')->get();
        return view('Jabatan.data',['data' => $data]);
    }

    public function tambahjabatan()
    {
        return view('jabatan.tambahjabatan');
    }

    public function store(Request $request)
    {

        $golongan = $request->nama_jabatan;

        $cari = Jabatan::where('nama_golongan', $golongan)->get();

        if (count($cari) == 1) {
            //$result = false;
            return redirect()->route('jabatan');
        } else {
            $insert = array(
                'nama_golongan' => $request->nama_jabatan,
                'keterangan'    => $request->keterangan
            );

            DB::table('golongan')->insert($insert);
            return redirect()->route('jabatan');
        }
    
    }

    public function show($id)
    {
        $data = Jabatan::find($id);
        //dd($data);
        return view('jabatan.edit',compact('data'));
    }

    public function edit($id)
    {
        /* Cari Data Untuk Di Edit */
        // $cari = DB::table('jabatan')->where('id',$id)->get();
        // if(count($cari)){
        //    $jabatan = DB::table('karyawan')->get();
        //    return view('jabatan.edit', ['jabatan' => $jabatan, 'item' => $cari]);
        // }else{
        //     return redirect()->route('jabatan.index');

        // $data = Jabatan::find($id);
        // return $data;
        // // return view('jabatan.edit');
    }

    public function update(Request $request, $id)
    {
        //update data jabatan 
        $update = [
            'nama_jabatan'   => $request->nama_jabatan,
            'keterangan'   => $request->keterangan
        ];

        //alihkan halaman ke halaman jabatan
        User::where('id', $id)->update($update);
        $msg = "User Updated successful! ";
        return redirect('/jabatan');
    }

    public function destroy($id)
    {
        //menghapus data jabatan berdasarkan id yang dipilih
        $data = Jabatan::find($id);
        if($data){
            $message = true;
            $data->delete();
            
        }else{
            $message = false;
        }

        //alihkan halaman ke halaman jabatan
        return redirect()->route('jabatan');
    }
}