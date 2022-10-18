<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = ['box_width', 'box_height', 'x_distance', 'y_distance', 'time', 'is_distracted'];

}
