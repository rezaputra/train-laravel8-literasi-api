<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'path', 'description', 'views', 'download'];

    public function tag(){
        return $this->hasManyThrough(
            '\App\Models\Tag',
            '\App\Models\DocumentTag',
            'document_id',
            'id',
            'id',
            'tag_id',
        );
    }


}
