@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="text-capitalize">form absensi</h5>
            <hr>
            <form action="{{route('absensistore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">nama karyawan</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="nm_karyawan" id="nama">
                            <option selected>Karyawan</option>
                            @foreach ($data as $item)
                                <option value="{{$item->nama}}">{{$item->nama}}</option> 
                            @endforeach 
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl" class="col-xs-2 col-form-label text-capitalize">tanggal</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl" id="ttl" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-time-input" class="col-xs-2 col-form-label">Jam Masuk</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="time" name="jam_masuk" id="example-time-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-time-input" class="col-xs-2 col-form-label">Jam Pulang</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="time" name="jam_plg" id="example-time-input" required>
                    </div>
                </div>
               {{-- <div class="form-group row">
                    <label for="jabatan" class="col-xs-2 col-form-label text-capitalize">jabatan</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="jabatan" id="jabatan">
                            <option selected>Jabatan</option>
                            @foreach ($jabatan as $item)
                                <option value="{{$item->id}}">{{$item->nama_golongan}}</option> 
                            @endforeach
                        </select>
                    </div>
                </div>--}}
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection