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
            <h5>Lembur Karyawan</h5>
            <a href="{{url('/tambahlmbr')}}" class="btn btn-primary">Tambah +</a>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            {{-- <th width="50px">#</th> --}}
                            <th width="200px">Nama</th>
                            <th width="100px">Tanggal</th>
                            <th width="100px">Jam Mulai</th>
                            <th width="100px">Jam Selesai</th>
                            <th width="100px">Terhitung</th>
                            <th width="50px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                {{-- <td>{{$item->id}}</td> --}}
                                <td class="text-capitalize">{{$item->nama_kry}}</td>
                                <td class="text-capitalize">{{$item->tanggal_lembur}}</td>
                                <td class="text-capitalize">{{$item->mulai_lembur}}</td>
                                <td class="text-capitalize">{{$item->selesai_lembur}}</td>
                                <td class="text-capitalize">{{$item->jumlah}}</td>
                                <td>
                                    <a href="{{url('delete',$item->id)}}" class="btn btn-success btn-circle waves-effect waves-light">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach 
                        {{-- <tr>
                            <td>1</td>
                            <td class="text-capitalize">Niya</td>
                            <td class="text-capitalize">01-10-2022</td>
                            <td class="text-capitalize">18:00</td>
                            <td class="text-capitalize">19:00</td>
                            <td class="text-capitalize">60 Menit</td>
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