<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoctorService extends Model
{
    use HasFactory, SoftDeletes, Translatable;

    public $translatedAttributes = ['name', 'description', 'reasons'];
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
    ];

    public function doctorCategory()
    {
        return $this->belongsTo(DoctorCategory::class, 'doctor_category_id');

    }//end of doctors

    public function doctorServiceRelation()
    {
        return $this->hasMany(DoctorServiceRelation::class, 'doctor_service_id');

    }//end of doctors

    public function doctorRelation()
    {
        return $this->hasMany(DoctorServiceRelation::class, 'doctor_id');

    }//end of doctors
}
