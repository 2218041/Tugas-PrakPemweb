<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
    use HasFactory;

    protected $table = 'analisis';

    protected $fillable = [
        'informasi_kontak_pelanggan',
        'interaksi_dengan_pelanggan',
        'skor_kepuasan_pelanggan',
        'skor_customer_effort',
        'analisis_trend',
    ];
}
