<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class konten extends Model
{
    //
      protected $guarded = [];

    public function kontenImg(): BelongsTo
    {
        return $this->belongsTo(Img::class, 'konten_img');
    }
}
