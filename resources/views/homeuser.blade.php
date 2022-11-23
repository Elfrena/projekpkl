@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="content-area p-y-1">
        <div class="container-fluid">
            <div class="row row-md">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="box box-block tile tile-2 bg-danger m-b-2">
                        <div class="t-icon right"><i class="ti-user"></i></div>
                        <div class="t-content">
                            <h2 class="m-b-1">{{ $user }}</h2>
                            <a href="{{ route('profilkaryawan') }}" type="button" class="btn btn-white btn-circle waves-effect waves-light">
                                <i class="ti-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="box box-block tile tile-2 bg-primary m-b-2">
                        <div class="t-icon right"><i class="ti-menu-alt"></i></div>
                        <div class="t-content">
                            <h3 class="m-b-1">Pengajuan Cuti</h3>
                            <a href="{{url('/tambahcuti')}}" type="button" class="btn btn-white btn-circle waves-effect waves-light">
                                <i class="ti-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection