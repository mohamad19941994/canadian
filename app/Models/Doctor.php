<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes, Translatable;

    public $translatedAttributes = ['name', 'description','meta_title','meta_description','keywords','image_alt'];
    protected $guarded = [];

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
        'doctor_services' => 'array'
    ];

    public function doctorCategory()
    {
        return $this->belongsTo(DoctorCategory::class, 'doctor_category_id');
    }

    public function doctorServiceRelation()
    {
        return $this->hasMany(DoctorServiceRelation::class, 'doctor_id');

    }//end of doctors

}
