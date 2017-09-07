<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'image',
        'title',
        'description',
        'group_id',
        'section_id',
        'price'

    ];
}
