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
            <h5>Data Jabatan</h5>
            <a href="{{url('/tambahjabatan')}}" class="btn btn-primary">Tambah +</a>
            <hr>

            {{-- @if (session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-success">
                    <strong>Attention</strong> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $errors }}</li>    
                    @endforeach
                </ul>
                </div>
                
            @endif --}}
                
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            {{-- <th width="10px">ID</th> --}}
                            <th width="100px">Jabatan</th>
                            <th width="200px">Keterangan</th>
                            <th width="10px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                {{-- <td>{{$item->id}}</td> --}}
                                <td class="text-capitalize">{{$item->nama_golongan}}</td>
                                <td class="text-capitalize">{{$item->keterangan}}</td>
                                <td>
                                    <a href="{{url('/deletejabatan',$item->id)}}" class="btn btn-success btn-circle waves-effect waves-light">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td>1</td>
                            <td class="text-capitalize">admin</td>
                            <td class="text-capitalize">jabatan untuk admin keuangan</td>
                            <td>
                                <a href="{{url('/')}}" class="btn btn-success btn-circle waves-effect waves-light">
                                    <i class="ti-pencil"></i>
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