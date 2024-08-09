<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WatchTime extends Model
{
    use HasFactory;
    protected $table = "watch_times";
    protected $fillable = ['user_id', 'class_id', 'minutes'];

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
