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
            <h5 class="m-b-1">Data Karyawan</h5>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            {{-- <th width="50px">#</th> --}}
                            <th width="50px">NIP</th>
                            <th width="100px">Nama</th>
                            <th width="50px">Jenis Kelamin</th>
                            <th width="90px">Tgl.Lahir</th>
                            <th width="150px">Alamat</th>
                            <th width="100px">No.Tlpn</th>
                            <th width="100px">Email</th>
                            <th width="50px">Jabatan</th>
                            <th width="50px">Foto</th>
                            <th width="50px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                {{-- <td>{{$item->id}}</td> --}}
                                <td class="text-capitalize">NIK-{{$item->nip}}</td>
                                <td class="text-capitalize">{{$item->nama}}</td>
                                <td class="text-capitalize">{{$item->jenis_kelamin}}</td>
                                <td>
                                    @php
                                        $lahir = date('d-m-Y',strtotime($item->tanggal_lahir))
                                    @endphp
                                    {{$lahir}}
                                </td>
                                <td class="text-capitalize">{{$item->alamat}}</td>
                                <td>{{$item->telpon}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->jabatan}}</td>
                                <td>{{$item->foto}}</td>
                                <td>
                                    <a href="{{url('editkry',$item->id)}}" class="btn btn-success btn-circle waves-effect waves-light">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="{{url('deletekaryawan',$item->id)}}" class="btn btn-success btn-circle waves-effect waves-light">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td>1</td>
                            <td class="text-capitalize">123456</td>
                            <td class="text-capitalize">Dika Saputra</td>
                            <td class="text-capitalize">HRD</td>
                            <td class="text-capitalize">08950112345</td>
                            <td>
                                <a href="{{url('/')}}" class="btn btn-success btn-circle waves-effect waves-light">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="{{url('/')}}" class="btn btn-success btn-circle waves-effect waves-light">
                                        <i class="ti-trash"></i>
                                    </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>087654</td>
                            <td>Aziza Nur A</td>
                            <td>Sekertaris</td>
                            <td>012387633456</td>
                            <td>
                                <a href="{{url('/')}}" class="btn btn-success btn-circle waves-effect waves-light">
                                    <i class="ti-pencil"></i>
                                </a>
                                <a href="{{url('/')}}" class="btn btn-success btn-circle waves-effect waves-light">
                                        <i class="ti-trash"></i>
                                    </a>
                            </td>
                        </tr>
                        --}}
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