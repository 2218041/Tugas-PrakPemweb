@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <span>Hubungiku</span>
                <span>Dashboard</span>
            </div>
            <div class="user-info">
                <div class="search">
                    <i class="bx bx-search-alt"></i>
                    <input type="text" placeholder="Search" />
                </div>
                <img src="{{ asset('image/support.png') }}" alt="" />
            </div>
        </div>
        <div class="widget-container">
            <!-- Widget untuk menampilkan jumlah data di analisis.php -->
            <div class="widget">
                <h3>Data Analisis Kepuasan Pelanggan</h3>
                <p>Total data: {{ $totalAnalisis }}</p>
            </div>
        </div>
    </div>
@endsection
