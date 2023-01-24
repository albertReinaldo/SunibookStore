<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\publishers;
use App\Models\Book_category;

class books extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $guarded = ['id'];

    // protected $fillable = [
    //     'publisher_id',
    //     'title',
    //     'author',
    //     'year',
    //     'synopsis',
    //     'image'
    // ];

    public function publishers()
    {
        return $this->belongsTo(publishers::class);
    }

    public function detailBook()
    {
        return $this->hasMany(book_category::class);
    }
}
