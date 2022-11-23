@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="text-capitalize">form tambah jabatan</h5>
            <hr>
            <form action="{{route('addjabatan')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">nama jabatan</label>
                    <div class="col-xs-10">
                        <input type="text" name="nama_jabatan" id="nama" class="form-control @error('nama_jabatan') is-invalid @enderror" placeholder="Nama Jabatan ..." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-xs-2 col-form-label text-capitalize">keterangan</label>
                    <div class="col-xs-10">
                        <textarea class="form-control" name="keterangan" id="exampleTextarea" rows="3"></textarea>
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