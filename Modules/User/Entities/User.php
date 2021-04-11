<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Hash;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'user_type'];

    protected $hidden = ['password', 'remember_token'];
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\UserFactory::new();
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
