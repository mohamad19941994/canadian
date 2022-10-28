<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorServiceRelation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function doctorService()
    {
        return $this->belongsTo(DoctorService::class, 'doctor_service_id');
    }


}
