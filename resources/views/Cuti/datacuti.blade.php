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
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            <th width="100px">Tanggal Mulai</th>
                            <th width="100px">Tanggal Selesai</th>
                            <th width="50px">Lama Cuti</th>
                            <th width="100px">Status</th>
                            <th width="50px">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>
                                    @php
                                        $mulai = date('d-m-Y',strtotime($item->tanggal_mulai))    
                                    @endphp
                                    {{ $mulai }}
                                </td>
                                <td>
                                    @php
                                        $selesai = date('d-m-Y',strtotime($item->tgl_selesai))    
                                    @endphp
                                    {{ $selesai }}
                                </td>
                                <td>
                                    {{ $item->jumlah }} Hari
                                </td>
                                <td>
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
                                </td>
                                <td class="text-capitalize">{{ $item->keterangan }}</td>
                            </tr>
                        @endforeach
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
