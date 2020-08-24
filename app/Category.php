<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Category extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Book::class);
    }
}
