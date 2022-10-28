<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name', 'description', 'content', 'instructor', 'level', 'language', 'name_slug'];
}
