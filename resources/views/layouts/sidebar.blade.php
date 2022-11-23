@if (auth()->user()->level=="admin")
<div class="site-sidebar-overlay"></div>
<div class="site-sidebar">
    <a class="logo" href="{{url('/')}}">
        <span class="l-text text-uppercase">HRM</span>
        <span class="l-icon"></span>
    </a>
    <div class="custom-scroll custom-scroll-light">
        <ul class="sidebar-menu">
            <li class="menu-title m-t-0-5">Main Dashboard</li>
            <li>
                <a href="{{url('/')}}" class="waves-effect waves-light">
                    <span class="s-icon"><i class="ti-dashboard"></i></span>
                    <span class="s-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-title m-t-0-5">Master Data</li>
            <li>
                <a href="{{url('/jabatan')}}" class="waves-effect waves-light">
                    <span class="s-icon"><i class="ti-layers"></i></span>
                    <span class="s-text">Jabatan</span>
                </a>
            </li>
            <li class="with-sub">
                <a href="#" class="waves-effect  waves-light">
                    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                    <span class="s-icon"><i class="ti-user"></i></span>
                    <span class="s-text">Karyawan</span>
                </a>
                <ul>
                    <li><a href="{{route('karyawan.create')}}">Tambah</a></li>
                    <li><a href="{{route('karyawan.index')}}">Data</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('/absensi')}}" class="waves-effect waves-light">
                    <span class="s-icon"><i class="ti-calendar"></i></span>
                    <span class="s-text">Absensi</span>
                </a>
            </li>
            <li>
                <a href="{{url('/lembur')}}" class="waves-effect waves-light">
                    <span class="s-icon"><i class="ti-time"></i></span>
                    <span class="s-text">Lembur</span>
                </a>
            </li>
            <li>
                <a href="{{url('/cuti')}}" class="waves-effect waves-light">
                    <span class="s-icon"><i class="ti-agenda"></i></span>
                    <span class="s-text">Cuti</span>
                </a>
            </li>
            <li>
                <a href="{{url('/user')}}" class="waves-effect waves-light">
                    <span class="s-icon"><i class="ti-id-badge"></i></span>
                    <span class="s-text">User</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@endif

@if (auth()->user()->level=="user")
<div class="site-sidebar-overlay"></div>
<div class="site-sidebar">
    <a class="logo" href="{{url('/homeuser')}}">
        <span class="l-text text-uppercase">HRM</span>
        <span class="l-icon"></span>
    </a>
    <div class="custom-scroll custom-scroll-light">
        <ul class="sidebar-menu">
        <li class="menu-title m-t-0-5">Main Dashboard</li>
            <li>
                <a href="{{url('/homeuser')}}" class="waves-effect waves-light">
                    <span class="s-icon"><i class="ti-dashboard"></i></span>
                    <span class="s-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-title m-t-0-5">Master Data</li>
            <li class="with-sub">
                <a href="#" class="waves-effect  waves-light">
                    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                    <span class="s-icon"><i class="ti-agenda"></i></span>
                    <span class="s-text">Cuti</span>
                </a>
                <ul>
                    <li><a href="{{url('/tambahcuti')}}">Tambah</a></li>
                    <li><a href="{{url('/datacuti')}}">Data</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="{{url('/tambahcuti')}}" class="waves-effect waves-light">
                    <span class="s-icon"><i class="ti-agenda"></i></span>
                    <span class="s-text">Cuti</span>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
@endif