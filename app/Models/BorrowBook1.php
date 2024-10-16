<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BorrowBook extends Model
{
    use HasFactory;
    protected $fillable = ['borrow_id', 'book_id', 'return_date', 'status'];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function borrow(): BelongsTo
    {
        return $this->belongsTo(Borrow::class);
    }
}
