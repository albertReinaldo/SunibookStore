<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historyDetail extends Model
{
    use HasFactory;

    public function histories(){
        return $this->belongsTo(history::class,'historyId');
    }

    public function books(){
        return $this->belongsTo(books::class,'bookId');
    }
}
