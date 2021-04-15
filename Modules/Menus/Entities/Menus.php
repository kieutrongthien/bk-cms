<?php

namespace Modules\Menus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menus extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value'];
    
    protected static function newFactory()
    {
        return \Modules\Menus\Database\factories\MenusFactory::new();
    }

    public function isEnabledScoped($query)
    {
        return $query->where('is_enabled', 1);
    }

    public function isDisabledScoped($query)
    {
        return $query->where('is_enabled', 0);
    }

    public function category()
    {
        return $this->belongsTo(\Modules\Blog\Entities\Categories::class, 'id', 'category_id');
    }
}
