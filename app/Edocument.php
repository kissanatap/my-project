<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edocument extends Model
{
    protected $table = 'edocuments';
    protected $fillable = [
        'number', 'title', 'detail', 'image','type_id', 'created_by'
    ];

    public function typedocs(){
        return $this->belongsTo(Typedoc::class, 'type_id');
    }
}
