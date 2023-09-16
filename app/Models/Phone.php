<?php

namespace App\Models;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    use HasFactory;


        /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(Phone::class);
    }
}
