<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'gender', 'phone_number', 'address'];

    public function author(): HasMany
    {
        return $this->hasMany(Borrow::class);
    }
}
