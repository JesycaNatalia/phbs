<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kuisoner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kuisoners';
    protected $fillable = ['pertanyaan', 'status_pertanyaan'];
    public $timestamps = false;
}
