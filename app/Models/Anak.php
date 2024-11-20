<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $fillable = ['nama', 'gender', 'ortu_id'];

    public function ortu()
    {
        return $this->belongsTo(Ortu::class);
    }
}
