@extends('layouts.app')

@section('content')
<div class="header-wrapper">
    <!-- Header code -->
    <div class="header-title">
        <span>Hubungiku</span>
        <span>Dashboard</span>
    </div>
    <div class="user-info">
        <div class="search">
            <i class="bx bx-search-alt"></i>
            <input type="text" placeholder="Search" />
        </div>
        <img src="../image/support.png" alt="" />
    </div>
</div> 
<div class="tabel-wrapper">
    <h3 class="main-title">Analisis Kepuasan Pelanggan</h3>
    <div class="button-container">
        <button class="move-button" onclick="window.location.href='{{ route('analisis.print') }}'">Print</button>
    </div>
    <div class="tabel-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Informasi Kontak Pelanggan</th>
                    <th>Interaksi dengan Pelanggan</th>
                    <th>Skor Kepuasan Pelanggan</th>
                    <th>Skor Customer Effort</th>
                    <th>Analisis Trend</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @if ($results->count() > 0)
                    @foreach($results as $result)
                        <tr>
                            <td>{{ $result->id }}</td>
                            <td>{{ $result->informasi_kontak_pelanggan }}</td>
                            <td>{{ $result->interaksi_dengan_pelanggan }}</td>
                            <td>{{ $result->skor_kepuasan_pelanggan }}</td>
                            <td>{{ $result->skor_customer_effort }}</td>
                            <td>{{ $result->analisis_trend }}</td>
                            <td>
                                <div class="button-container">
                                    <!-- Tautan Edit -->
                                    <a href="{{ route('analisis.edit', $result->id) }}" class="edit-button">Edit</a>
                                    <!-- Form untuk penghapusan -->
                                    <form action="{{ route('analisis.destroy', $result->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="remove-button">Remove</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">Tidak ada data</td>
                    </tr>
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="7">Total Data : {{ $results->count() }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
