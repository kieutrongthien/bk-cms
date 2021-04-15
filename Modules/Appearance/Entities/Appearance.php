<?php

namespace Modules\Appearance\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appearance extends Model
{
    use HasFactory;

    protected $table = 'appearance';
    protected $fillable = ['key', 'value'];
    
    protected static function newFactory()
    {
        return \Modules\Appearance\Database\factories\AppearanceFactory::new();
    }
}
