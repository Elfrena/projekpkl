@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="content-area p-y-1">
            <div class="container-fluid">
                <div class="row row-md">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 m-b-2">
                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-user"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase m-b-1">Jumlah Karyawan</h6>
                                <h1 class="m-b-1">42</h1>
                                <span class="tag tag-danger m-r-0-5"></span>
                                <span class="text-muted font-90">Jumlah Karyawan per2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 m-b-2">
                            <div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase m-b-1">Presetase Kehadiran</h6>
                                <h1 class="m-b-1">% 98,5</h1>
                                <i class="fa fa-caret-up text-success m-r-0-5"></i><span>Dari Total Keseluruhan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 m-b-2">
                            <div class="t-icon right"><span class="bg-primary"></span><i class="ti-gallery"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase m-b-1">Karyawan Cuti</h6>
                                <h1 class="m-b-1">2</h1>
                                <span class="tag tag-primary m-r-0-5"></span>
                                <span class="text-muted font-90">Periode 2022</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection