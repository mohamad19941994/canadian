<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name', 'description', 'instructor', 'level', 'language','meta_title','meta_description','keywords','image_alt'];
}