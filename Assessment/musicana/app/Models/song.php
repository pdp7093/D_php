<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    //
    protected $fillable = ['album_id', 'song_name', 'artist', 'song_image','file_path', 'duration'];
}
