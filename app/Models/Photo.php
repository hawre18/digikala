<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploads='/storage/photos/';
    public function documents()
    {
        return $this->belongsToMany(Document::class,'documents_photo','photo_id','doucument_id');
    }
}
