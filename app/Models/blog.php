<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationships\BelongsTo;


class blog extends Model
{
    protected $table = 'blog';

    protected $fillable = ['title', 'uploaded_at', 'content', 'user_id'];

    public function user():BelongsTo
    {
        $this->belongsTo(User::class);
    }
}
