@include('layouts.header')
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo_unico_rtp.png') }}" alt="Logo RTP" width="80"><span class="brand-logo"></span></a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                @can('create user')
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Administración</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center {{ (request()->is('create-user')) ? 'active' : '' }}" href="{{ route('create.user') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Crear Usuario</span></a>
                        </li>
                    </ul>
                </li>
                @endcan
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('mapa') }}"><i data-feather='map-pin'></i> Mapa escuela</a></li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('mapa2') }}"><i data-feather='map-pin'></i> Mapa completo</a></li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('data.dashboard') }}"><i data-feather='bar-chart'></i> Venta de boletaje</a></li>
            </ul>
        </div>
    </div>
        <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>