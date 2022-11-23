@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="text-capitalize">form cuti karyawan</h5>
            <hr>
            <form action="{{route('cutistore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal mulai</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl_mulai" id="tglmulai" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal selesai</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl_selesai" id="tglselesai" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">jumlah cuti</label>
                    <div class="col-xs-10">
                        <input type="number" name="jmlh_cuti" id="jumlah" class="form-control" placeholder="1 hari.." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ket" class="col-xs-2 col-form-label text-capitalize">Keterangan</label>
                    <div class="col-xs-10">
                        <textarea class="form-control" name="ket" id="keterangan" rows="3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
