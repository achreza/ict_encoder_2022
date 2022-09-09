<!-- Left Panel -->
@if(auth()->guard('tim')->check())
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard.peserta') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">PENDAFTARAN</li><!-- /.menu-title -->
                @if ( !auth()->guard('tim')->user()->pembayaran->status)
                    <li>
                        <a href="{{ route('dashboard.peserta.konfirmasi-pembayaran') }}"> <i class="menu-icon fa fa-money"></i>Konfirmasi Pembayaran </a>
                    </li>
                @endif
                <li>
                    <a href="{{ route('dashboard.profile') }}"> <i class="menu-icon ti-face-smile"></i>Profile </a>
                </li>
                @if ( auth()->guard('tim')->user()->pembayaran->status)
                <li class="menu-title">PESERTA</li><!-- /.menu-title -->
                    @if (auth()->guard('tim')->user()->lomba->kategori_lomba_id == 1)
                        <li>
                            <a href="{{ route('dashboard.linkVideo') }}"><i class="menu-icon ti-video-clapper"></i>Link Video</a>
                        </li>
                    @endif
                    @if (auth()->guard('tim')->user()->lomba->kategori_lomba_id == 2)
                        <li>
                            <a href="{{ route('dashboard.proposal') }}"><i class="menu-icon ti-book"></i>Proposal</a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.linkPrototype') }}"><i class="menu-icon ti-ruler-pencil"></i>Link Prototype Aplikasi</a>
                        </li>
                    @endif
                @endif
            </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    @endif

    @if (auth()->guard('admin')->check())
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('dashboard.admin') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Data Peserta</li><!-- /.menu-title -->
                    <li>
                        <a href="{{ route('dashboard.cinema') }}"> <i class="menu-icon ti-user"></i>Peserta Cinematography</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.iai') }}"><i class="menu-icon ti-user"></i>Peserta IAI</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.mdr') }}"><i class="menu-icon ti-user"></i>Peserta MDR</a>
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
    @endif
        
        <!-- /#left-panel -->
        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./"><img src="{{URL::to('server/img/logo.svg')}}" alt="Logo"></a>
                        <a class="navbar-brand hidden" href="./"><img src="{{URL::to('server/images/logo.svg')}}" alt="Logo"></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="header-left">
                            <div class="user-area dropdown float-right">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="user-avatar rounded-circle" src="{{URL::to('server/img/admin.jpg')}}" alt="User Avatar">
                                </a>
                                <div class="user-menu dropdown-menu">
                                    <a class="nav-link" href="{{ route('auth.logout') }}"><i class="fa fa-power -off"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>