<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class messege extends Model
{
    //
      protected $guarded = [];

    public function pengirim(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
