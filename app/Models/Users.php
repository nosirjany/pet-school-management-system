<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
    ];
    public function isAdmin()
    {
        return $this->role === 'admin';

    }

}
