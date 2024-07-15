<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'book_id',
        'review_by',
        'rating',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'review_by');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}