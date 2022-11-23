@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('vendor/DataTables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/DataTables/Buttons/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5>Absensi Karyawan</h5>
            <a href="{{url('/tambahabs')}}" class="btn btn-primary">Tambah +</a>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            {{-- <th>ID</th> --}}
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                            <th>Jam Kerja</th>
                            <th>Terlambat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($data as $item)
                            <tr>
                                {{-- <td>{{$item->id}}</td> --}}
                                <td class="text-capitalize">{{$item->nama}}</td>
                                <td class="text-capitalize">{{$item->tgl_absen}}</td>
                                <td class="text-capitalize">{{$item->jam_masuk}}</td>
                                <td class="text-capitalize">{{$item->jam_pulang}}</td>
                                <td class="text-capitalize">{{$item->jam_kerja}}</td>
                                <td class="text-capitalize">{{$item->terlambat}}</td>
                                <td>
                                    <a href="{{url('/deleteabsen',$item->id)}}" class="btn btn-success btn-circle waves-effect waves-light">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach 
                         {{-- <tr>
                            <td>1</td>
                            <td class="text-capitalize">Niya</td>
                            <td class="text-capitalize">01-10-2022</td>
                            <td class="text-capitalize">09:01</td>
                            <td class="text-capitalize">17:00</td>
                            <td class="text-capitalize">8 Jam</td>
                            <td class="text-capitalize">1 Menit</td>
                            <td>
                                <a href="{{url('/')}}" class="btn btn-success btn-circle waves-effect waves-light">
                                    <i class="ti-trash"></i>
                                </a>
                            </td> 
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('vendor/DataTables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/Responsive/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/JSZip/jszip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/pdfmake/build/pdfmake.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/pdfmake/build/vfs_fonts.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/tables-datatable.js')}}"></script>
@endsection