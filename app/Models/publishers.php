<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publishers extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image'
    ];

    public function books(){
        return $this->hasMany(books::class);
    }
}
