<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    // protected $fillable = [
    //     'titles',
    //     'durations',
    //     'ratings',
    //     'genres',
    //     'descriptions',
    //     'thumbnails'
    // ];
    protected $guarded = [];
    use SoftDeletes;
    // protected $table = "films";
    use HasFactory;
}
