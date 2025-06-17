<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class laporan extends Model
{
    //
      protected $guarded = [];

         public function korban(): BelongsTo
    {
        // 'id_korban' adalah foreign key di tabel laporan
        return $this->belongsTo(User::class, 'id_korban');
    }

    /**
     * Relasi untuk mendapatkan data user (psikolog) dari id_psikolog.
     */
    public function psikolog(): BelongsTo
    {
        // 'id_psikolog' adalah foreign key di tabel laporan
        return $this->belongsTo(User::class, 'id_psikolog');
    }

    /**
     * Relasi untuk mendapatkan data gambar dari bukti_img.
     */
    public function bukti(): BelongsTo
    {
        return $this->belongsTo(Img::class, 'bukti_img');
    }
}
