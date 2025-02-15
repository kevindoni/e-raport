<?php
$currentUrl = url()->current();
$user = Auth::user();
$role = $user->role;
?>

@if ($role == 'Admin')
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel"></div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ $currentUrl == route('dashboard') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel">Data Master</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ $currentUrl == route('sekolah.index') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('sekolah.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Data Sekolah</span>
                </a>
            </li>
            <li class="{{ $currentUrl == route('kurikulum.index') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('kurikulum.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                    <span class="pcoded-mtext">Data Kurikulum</span>
                </a>
            </li>
            <li class="{{ $currentUrl == route('pelajaran.index') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('pelajaran.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                    <span class="pcoded-mtext">Data Mata Pelajaran</span>
                </a>
            </li>
            <li class="{{ $currentUrl == route('user.index') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('user.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Data Guru</span>
                </a>
            </li>
            <li class="{{ $currentUrl == route('siswa.index') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('siswa.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">Data Siswa</span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel">Raport</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ $currentUrl == route('tahun.index') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('tahun.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                    <span class="pcoded-mtext">Data Tahun Ajaran</span>
                </a>
            </li>
            <li class="{{ $currentUrl == route('kelas.index') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('kelas.index') }}">
                    <span class="pcoded-micon"><i class="feather icon-server"></i></span>
                    <span class="pcoded-mtext">Data Kelas</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
@else
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel"></div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ $currentUrl == route('dashboard') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
        </ul>
        @if ($user->getKelas()->count() > 1)
        <div class="pcoded-navigatio-lavel">Wali Kelas</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ $currentUrl == route('user.kelas') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('user.kelas') }}">
                    <span class="pcoded-micon"><i class="feather icon-server"></i></span>
                    <span class="pcoded-mtext">Data Kelas</span>
                </a>
            </li>
        </ul>
        @endif
        {{-- @if ($user->get)

        @endif --}}
        <div class="pcoded-navigatio-lavel">Guru Mata Pelajaran</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ $currentUrl == route('user.jadwal') ? 'active pcoded-trigger' : '' }}">
                <a href="{{ route('user.jadwal') }}">
                    <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                    <span class="pcoded-mtext">Data Mata Pelajaran</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
@endif
