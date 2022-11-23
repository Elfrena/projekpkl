@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="text-capitalize">Profil Karyawan</h5>
            <hr>
            @foreach ($data as $it)
                    @csrf

                     <div class="row">
                        <div class="col-md-4">
                            @if($it->foto)
                                <img src="{{ asset('storage/photos/'.$it->foto) }}" class="img-thumbnail rounded mx-auto d-block">
                            @else
                                <img src="{{ asset('img/images.png') }}" class="img-thumbnail rounded mx-auto d-block">
                            @endif
                            
                        </div>
                    </div> 
                    
                    <div class="form-group row">
                        <label for="nip" class="col-xs-2 col-form-label text-capitalize">NIP</label>
                        <div class="col-xs-10">
                            <input type="text" name="nip" id="nip" class="form-control" value="{{$it->nip}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-xs-2 col-form-label text-capitalize">nama lengkap</label>
                        <div class="col-xs-10">
                            <input type="text" name="nm_lengkap" id="nama" class="form-control" value="{{$it->nama}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-xs-2 col-form-label text-capitalize">jenis kelamin</label>
                        <div class="col-xs-10">
                            <label class="custom-control custom-radio">
                                @if ($it->jenis_kelamin == 'pria')
                                    <input id="radio1" name="radio" value="pria" type="radio" class="custom-control-input" checked>
                                @else
                                    <input id="radio1" name="radio" value="pria" type="radio" class="custom-control-input">
                                @endif
                                
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Laki-Laki</span>
                            </label>
                            <label class="custom-control custom-radio">
                                @if ($it->jenis_kelamin == 'wanita')
                                    <input id="radio1" name="radio" value="wanita" type="radio" class="custom-control-input" checked>
                                @else
                                    <input id="radio1" name="radio" value="wanita" type="radio" class="custom-control-input">
                                @endif
                                
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Perempuan</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tmptlahir" class="col-xs-2 col-form-label text-capitalize">tempat lahir</label>
                        <div class="col-xs-10">
                            <input type="text" name="tmp_lahir" id="tmptlahir" class="form-control" value="{{$it->tempat_lahir}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-xs-2 col-form-label text-capitalize">tanggal lahir</label>
                        <div class="col-xs-10">
                            <input type="date" name="tgl_lahir" id="ttl" class="form-control" value="{{$it->tanggal_lahir}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="notlp" class="col-xs-2 col-form-label text-capitalize">No Telepon</label>
                        <div class="col-xs-10">
                            <input type="tel" name="tlpn" id="notlpn" class="form-control" value="{{$it->telpon}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-xs-2 col-form-label text-capitalize">E-mail</label>
                        <div class="col-xs-10">
                            <input type="email" name="email" id="email" class="form-control" value="{{$it->email}}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-xs-2 col-form-label text-capitalize">status nikah</label>
                        <div class="col-xs-10">
                            <select class="custom-select" name="status" id="status">
                                <option selected>{{ $it->status_nikah}}</option>
                                <option value="1">Belum Nikah</option>
                                <option value="2">Nikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-xs-2 col-form-label text-capitalize">alamat</label>
                        <div class="col-xs-10">
                            <textarea class="form-control" name="alamat" id="exampleTextarea" rows="3">{{ $it->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-xs-2 col-form-label text-capitalize">tempat lahir</label>
                        <div class="col-xs-10">
                            <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{$it->jabatan}}">
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
                </form>
            @endforeach

        </div>
    </div>
@endsection