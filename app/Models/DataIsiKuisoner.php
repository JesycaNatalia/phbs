<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataIsiKuisoner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'data_isi_kuisoners';
    protected $fillable = ['nama', 'no_kk', 'bulan', 'skor', 'hasil'];
    public $timestamps = false;
}
