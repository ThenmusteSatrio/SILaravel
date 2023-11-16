<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $table = 'admin';

    protected $fillable = [
        'username',
        'nama_lengkap',
        'password', 
        'role',
        'level',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

}
