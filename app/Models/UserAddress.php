<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = ['street', 'name'];
    protected $hidden = ['street'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
