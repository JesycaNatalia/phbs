<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IsiKuisoner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'isi_kuisoners';
    protected $fillable = ['pertanyaan_id', 'jawaban', 'skor'];
    public $timestamps = false;
}
