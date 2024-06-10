@extends('layouts.app')

@section('content')
<div class="header-wrapper">
    <div class="header-title">
        <span>Edit Data</span>
        <span>Dashboard</span>
    </div>
    <div class="user-info">
        <div class="search">
            <i class="bx bx-search-alt"></i>
            <input type="text" placeholder="Search">
        </div>
        <img src="../image/government64px.png" alt="">
    </div>
</div>
<div class="tabel-wrapper">
    <h3 class="main-title">Edit Data</h3>
    <div class="form-wrapper">
        <!-- Form untuk pengeditan data -->
        <form action="{{ route('analisis.update', $analisis->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="informasi_kontak_pelanggan">Informasi Kontak Pelanggan</label>
                <textarea id="informasi_kontak_pelanggan" name="informasi_kontak_pelanggan" rows="4">{{ $analisis->informasi_kontak_pelanggan }}</textarea>
            </div>
            <div class="form-group">
                <label for="interaksi_dengan_pelanggan">Interaksi dengan Pelanggan</label>
                <textarea id="interaksi_dengan_pelanggan" name="interaksi_dengan_pelanggan" rows="4">{{ $analisis->interaksi_dengan_pelanggan }}</textarea>
            </div>
            <div class="form-group">
                <label for="skor_kepuasan_pelanggan">Skor Kepuasan Pelanggan</label>
                <input type="text" id="skor_kepuasan_pelanggan" name="skor_kepuasan_pelanggan" value="{{ $analisis->skor_kepuasan_pelanggan }}">
            </div>
            <div class="form-group">
                <label for="skor_customer_effort">Skor Customer Effort</label>
                <input type="text" id="skor_customer_effort" name="skor_customer_effort" value="{{ $analisis->skor_customer_effort }}">
            </div>
            <div class="form-group">
                <label for="analisis_trend">Analisis Trend</label>
                <textarea id="analisis_trend" name="analisis_trend" rows="4">{{ $analisis->analisis_trend }}</textarea>
            </div>
            <button type="submit" class="move-button">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection
