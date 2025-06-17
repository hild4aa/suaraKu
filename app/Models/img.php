<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class img extends Model
{
    //
      protected $guarded = [];

    public function psikolog(): HasOne
    {
    return $this->hasOne(User::class, 'sertifikat_psikolog_img');
    }

    public function konten(): HasOne
    {
    return $this->hasOne(konten::class, 'konten_img');
    }
}
