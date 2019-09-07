<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typedoc extends Model
{
    protected $table = 'typedocs';

    protected $fillable = [
        'name'
    ];

    public function edocuments() {
        return $this->hasMany(Edocuments::class);
    }
}
