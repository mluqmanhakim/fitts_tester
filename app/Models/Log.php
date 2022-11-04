<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = ['nickname','box_width', 'box_height', 'x_distance', 'y_distance', 'time', 'distracted', 'distract_type', 'misclick'];

}
