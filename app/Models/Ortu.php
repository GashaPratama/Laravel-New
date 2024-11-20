<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ortu extends Model
{
    protected $fillable = ['name'];

    public function anak(): HasMany
    {
        return $this->hasMany(Anak::class);
    }
}
