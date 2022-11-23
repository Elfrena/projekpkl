@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="text-capitalize">Edit data karyawan</h5>
            <hr>
            @foreach ($data as $it)
                <form action="{{url('updatecuti',$it->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="nama" class="col-xs-2 col-form-label text-capitalize">nama karyawan</label>
                        <div class="col-xs-10">
                            <input type="text" name="nm_karyawan" id="nama" class="form-control" value="{{$it->nama_karyawan}}" placeholder="Nama Lengkap ..." readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nip" class="col-xs-2 col-form-label text-capitalize">NIP</label>
                        <div class="col-xs-10">
                            <input type="number" name="nip" id="nip" class="form-control" value="{{$it->nip}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-xs-2 col-form-label text-capitalize">jabatan</label>
                        <div class="col-xs-10">
                            <select class="custom-select" name="jabatan" id="jabatan">
                                <option selected>Jabatan</option>
                                @foreach ($data as $item)
                                    <option value="{{$item->nama_golongan}}">{{$item->nama_golongan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal mulai</label>
                        <div class="col-xs-10">
                            <input type="date" name="tgl_mulai" id="tglmulai" class="form-control" value="{{$it->tanggal_mulai}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal selesai</label>
                        <div class="col-xs-10">
                            <input type="date" name="tgl_selesai" id="tglselesai" class="form-control" value="{{$it->tgl_selesai}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-xs-2 col-form-label text-capitalize">jumlah cuti</label>
                        <div class="col-xs-10">
                            <input type="text" name="jmlh_cuti" id="jumlah" class="form-control" value="{{$it->jumlah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ket" class="col-xs-2 col-form-label text-capitalize">Keterangan</label>
                        <div class="col-xs-10">
                            <textarea class="form-control" name="ket" id="keterangan" rows="3" readonly>{{$it->keterangan}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-xs-2 col-form-label text-capitalize">status</label>
                        <div class="col-xs-10">
                            <select class="custom-select" name="status" id="status">
                                <option selected>Status</option>
                                <option value="2">Di Terima</option>
                                <option value="3">Di Tolak</option>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            @endforeach

        </div>
    </div>
@endsection