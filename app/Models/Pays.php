<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Ao;

class Pays extends Model
{
    use HasFactory;

    public function aos():HasMany{
        return $this->hasMany(Ao::class);
    }
}
