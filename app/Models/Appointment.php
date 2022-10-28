<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'date'];

    protected $casts = [
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
        'date' => 'date:Y-m-d H:i:s',
        'status' => 'boolean',
    ];
    protected $guarded = [];

    /*public function status() {

        dd($this->status);
        //$status = $this->status;

        //dd('aaaaaaaa');

        if ($this->status == 0){
            return 'قيد الإنتظار';
        }else{
            return 'مقبول';
        }

    }*/



    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function doctorCategory(){
        return $this->belongsTo(DoctorCategory::class, 'doctor_category_id');
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
