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
            <h5>Cuti Karyawan</h5>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            {{-- <th width="50px">#</th> --}}
                            <th width="200px">Nama</th>
                            <th width="50px">NIP</th>
                            <th width="100px">Jabatan</th>
                            <th width="100px">Tanggal Mulai</th>
                            <th width="100px">Tanggal Selesai</th>
                            <th width="50px">Jumlah Permohonan</th>
                            <th width="100px">Status</th>
                            <th width="50px">Keterangan</th>
                            <th width="50px">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                {{-- <td>{{$item->id}}</td> --}}
                                <td class="text-capitalize">{{$item->nama_karyawan}}</td>
                                <td class="text-capitalize">{{$item->nip}}</td>
                                <td class="text-capitalize">{{$item->jabatan}}</td>
                                <td class="text-capitalize">{{$item->tanggal_mulai}}</td>
                                <td class="text-capitalize">{{$item->tgl_selesai}}</td>
                                <td class="text-capitalize">{{$item->jumlah}}hari </td>
                                <td class="text-capitalize">
                                    @if ($item->status == '1')
                                        <span class="tag tag-pill tag-primary">pengajuan</span>
                                    @endif
                                    @if ($item->status == '2')
                                        <span class="tag tag-pill tag-success">di setujui</span>
                                    @endif
                                    @if ($item->status == '3')
                                        <span class="tag tag-pill tag-danger">di tolak</span>
                                    @endif
                                    @if ($item->status == '4')
                                        <span class="tag tag-pill tag-danger">di cancel</span>
                                    @endif
                                    {{-- {{$item->status}} --}}
                                </td>
                                <td class="text-capitalize">{{$item->keterangan}}</td>
                                <td>
                                    @if ($item->status == '1')
                                        <a href="{{url('editcuti',$item->id)}}" class="btn btn-success btn-circle waves-effect waves-light">
                                            <i class="ti-pencil"></i>
                                        </a>
                                    @else
                                        {{-- <a href="#}" class="btn btn-default btn-circle waves-effect waves-light">
                                            <i class="ti-pencil"></i>
                                        </a> --}}
                                    @endif
                                    @if ($item->status == '1' OR $item->status == '2')
                                        <a href="{{url('deletecuti',$item->id)}}" class="btn btn-success btn-circle waves-effect waves-light">
                                            <i class="ti-trash"></i>
                                        </a>
                                    @else
                                        
                                    @endif
                                   
                                </td>
                            </tr>
                        @endforeach 
                         {{--<tr>
                            <td>1</td>
                            <td>1</td>
                            <td class="text-capitalize">Agus</td>
                            <td class="text-capitalize">5 Hari</td>
                            <td class="text-capitalize">01-10-2022</td>
                            <td class="text-capitalize">05-10-2022</td>
                            <td class="text-capitalize">Di Proses</td>
                            <td>
                                <a href="{{url('delete')}}" class="btn btn-success btn-circle waves-effect waves-light">
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
