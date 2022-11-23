@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="text-capitalize">form tambah data karyawan</h5>
            <hr>
            <form action="{{route('karyawan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <div class="form-group row">
                    <label for="nip" class="col-xs-2 col-form-label text-capitalize">NIP</label>
                    <div class="col-xs-10">
                        <input type="number" name="nip" id="nip" class="form-control" placeholder="NIP ..." required>
                    </div>
                </div> --}}
                <div class="form-group row">
                    <label for="nama" class="col-xs-2 col-form-label text-capitalize">nama lengkap</label>
                    <div class="col-xs-10">
                        <input type="text" name="nm_lengkap" id="nama" class="form-control text-capitalize" placeholder="Nama Lengkap ..." value = "{{ old('nm_lengkap') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-xs-2 col-form-label text-capitalize">jenis kelamin</label>
                    <div class="col-xs-10">
                        <label class="custom-control custom-radio">
                            <input id="radio1" name="radio" value="pria" type="radio" class="custom-control-input" checked>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Laki-Laki</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input id="radio1" name="radio" value="wanita" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Perempuan</span>
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tmptlahir" class="col-xs-2 col-form-label text-capitalize">tempat lahir</label>
                    <div class="col-xs-10">
                        <input type="text" name="tmp_lahir" id="tmptlahir" class="form-control" placeholder="Tempat Lahir ..." value = "{{ old('tmp_lahir') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal lahir</label>
                    <div class="col-xs-10">
                        <input type="date" name="tgl_lahir" id="ttl" class="form-control" value = "{{ old('tgl_lahir') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="notlp" class="col-xs-2 col-form-label text-capitalize">No Telepon</label>
                    <div class="col-xs-10">
                        <input type="tel" name="tlpn" id="notlpn" class="form-control" placeholder="08XXXXXXXXXX ..." maxlength="15" value = "{{ old('tlpn') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-xs-2 col-form-label text-capitalize">E-mail</label>
                    <div class="col-xs-10">
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="kantor@gmail.com ..." required>
                    </div>
                    @error('email')
                     <div class="invalid-feedback">{{ $message }}
                     </div>
                     @enderror
                </div>
                <div class="form-group row">
                    <label for="status" class="col-xs-2 col-form-label text-capitalize">status nikah</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="status" id="status">
                            <option selected>Status</option>
                            <option value="1">Belum Nikah</option>
                            <option value="2">Nikah</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-xs-2 col-form-label text-capitalize">alamat</label>
                    <div class="col-xs-10">
                        <textarea class="form-control" name="alamat" id="exampleTextarea" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-xs-2 col-form-label text-capitalize">jabatan</label>
                    <div class="col-xs-10">
                        <select class="custom-select" name="jabatan" id="jabatan">
                            <option selected>Jabatan</option>
                            @foreach ($jabatan as $item)
                                <option value="{{$item->nama_golongan}}">{{$item->nama_golongan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <div class="form-group row">
                        <label for="foto" class="col-xs-2 col-form-label text-capitalize">Foto</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="filename" required>
                        </div>
                    </div>
                </div>
                
                {{-- <div class="form-group row">
                    <label for="foto" class="col-xs-2 col-form-label text-capitalize">Foto</label>
                    <div class="col-xs-10">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="https://www.gravatar.com/avatar/ec5c95a0bbaf89f6b9b82b9bb289b13f?d=mm&amp;s=250"/>
                                <input type="hidden" name="hiddenImage" value="default.jpg">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail">
                            </div>
                            <div>
                            <span class="btn default btn-file">
                                <span class="fileinput-new">
                                    Select image </span>
                                <span class="fileinput-exists">
                                    Change </span>
                                <input type="file" name="profileImage">
                            </span>
                                <a href="#" class="btn btn-sm red fileinput-exists" data-dismiss="fileinput">
                                    Remove </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection