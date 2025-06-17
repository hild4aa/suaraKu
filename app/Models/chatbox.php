<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class chatbox extends Model
{
    //
    protected $guarded = [];

    public function messeges(): HasMany
    {
        return $this->hasMany(Messege::class, 'id_chatbox');
    }

        public function pengirim(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
