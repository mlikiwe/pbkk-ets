<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'due_date', 'return_date', 'status'];

    public function book(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
