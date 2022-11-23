<?php

namespace App\Http\Controllers\Karyawan;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Jabatan;
use Hash;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('karyawan')->get();
        return view('karyawan.datakry', ['data' => $data]);
    }

    public function profilkaryawan(){

        $nip  = session()->get('nip');
        $data = Karyawan::where('nip',$nip)->get(); 
        return view('Karyawan.profilkry',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatan = Jabatan::all();
        return view('karyawan.tambah', ['jabatan' => $jabatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $AWAL = 'NIP';
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $noUrutAkhir = Karyawan::max('nip');
        $no = 1;
        
        if($noUrutAkhir) {
            $NIK = sprintf("%03s", abs($noUrutAkhir + 1));
        }
        else {
            $NIK = sprintf("%03s", $no);
        }
        
    
        $password = 123456;
        $pass = Hash::make($password);


        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasfile('filename')) {            
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('images'), $filename);
            //  Karyawan::create(
            //         [                        
            //             'foto' =>$filename
            //         ]
            //     );
            echo'Success';
        }else{
            echo'Gagal';
        }
       
        //dd($filename);

        $insert = array (
            'nip'   => $NIK,
            'nama'  => $request->nm_lengkap,
            'jenis_kelamin' => $request->radio,
            'tempat_lahir'  => $request->tmp_lahir,
            'tanggal_lahir' => $request->tgl_lahir,
            'telpon'        => $request->tlpn,
            'email'         => $request->email,
            'status_nikah'  => $request->status,
            'alamat'        => $request->alamat,
            'jabatan'       => $request->jabatan,
            'foto'          => $filename
        );

        // dd($insert);

        $validated = $request->validate([
        'email'             => 'required|email|unique:users,email',
        ]);

        DB::table('karyawan')->insert($insert);

        
        $users = array(
            'nip'       => $NIK,
            'email'     => $request->email,
            'name'      => $request->nm_lengkap,
            'password'  => Hash::make($password),
            'level'     => 'user'
        );


        DB::table('users')->insert($users);

        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Karyawan::find($id);
        //dd($data);
        return view('karyawan.edit',compact('data'));
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
        /* Cari Data Untuk Di Edit */
        //  $cari = DB::table('karyawan')->where('id',$id)->get();
        //  if(count($cari)){
        //       $jabatan = DB::table('golongan')->get();
        //       return view('karyawan.edit', ['jabatan' => $jabatan, 'item' => $cari]);
        //   }else{
        //       return redirect()->route('karyawan.index');}

        //dd($id);
        $data = Karyawan::where('id',$id)->get();
        $jabatan = Jabatan::all();
        // dd($data);
        //return $data;
        return view('karyawan.edit',['data' => $data, 'jabatan' => $jabatan]);
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

        // $request->validate([
        //     'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        // ]);
        // $request->hasfile('filename');
        // $filename  = time() . '.' . $filename->getClientOriginalExtension();
        // $request->file('filename')->move(public_path('images', $filename));
        // $path = "/images".$filename;

        if($request->file('filename') == "")
    	{
    		$filename->foto=$filename->foto;

    	}
    	else
    	{

    	$filename = time(). '.png';
        $request->file('filename')->storeAs("public/images", $filename);
	   	//$filename->foto = $filename;
	   }
    	//$filename->save();

        //dd($request->all());
        $data = Karyawan::where('id',$id)
              ->update([
                'nip'   => $request->nip,
                'nama'  => $request->nm_lengkap,
                'jenis_kelamin' => $request->radio,
                'tempat_lahir'  => $request->tmp_lahir,
                'tanggal_lahir' => $request->tgl_lahir,
                'telpon'        => $request->tlpn,
                'email'         => $request->email,
                'status_nikah'  => $request->status,
                'alamat'        => $request->alamat,
                'jabatan'       => $request->jabatan,
                'foto'          => $filename
              ]);
              //return redirect(karyawan.index)->with('toast_success','Data berhasil diupdate');
              return redirect()->route('karyawan.index');

        
    
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
        // dd($id);
        $data = Karyawan::find($id);
        if($data){
            $message = true;
            $data->delete();
            
        }else{
            $message = false;
        }
        return redirect()->route('karyawan.index');
    }
}