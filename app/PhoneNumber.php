<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    public function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
}
