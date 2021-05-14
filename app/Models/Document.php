<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function photos()
    {
        return $this->belongsToMany(Photo::class,'document_photo','document_id','photo_id');
    }
}
