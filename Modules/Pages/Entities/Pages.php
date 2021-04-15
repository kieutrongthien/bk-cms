<?php

namespace Modules\Pages\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pages extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'content', 'meta_title', 'meta_description'];
    
    protected static function newFactory()
    {
        return \Modules\Pages\Database\factories\PagesFactory::new();
    }
}
