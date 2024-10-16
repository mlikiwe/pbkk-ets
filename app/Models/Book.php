<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['isbn', 'title', 'author_name', 'genre_id', 'year_published', 'stock'];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function borrow(): HasMany
    {
        return $this->hasMany(Borrow::class);
    }
}
