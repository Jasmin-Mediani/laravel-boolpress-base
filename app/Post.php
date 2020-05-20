<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        /*purtroppo ho messo lo slug obbligatorio... non può essere null*/
        'slug',
        'location',
        'author',
        'published',
        'img'
    ];
}
