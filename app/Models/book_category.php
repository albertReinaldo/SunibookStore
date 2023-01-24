<?php

namespace App\Models;

use App\Models\books;
use App\Models\categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'book_id',
        'category_id'
    ];

    public function bookCat()
    {
        return $this->belongsTo(books::class, 'book_id');
    }

    public function book_category()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }
}
