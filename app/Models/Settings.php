<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'allowed_max_filesize',
        'allowed_filetypes',
        'site_url',
        'auth_type',
        'status'
    ];
}
