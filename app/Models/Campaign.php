<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory, SoftDeletes, Translatable;

    public $translatedAttributes = ['name', 'description', 'name_slug',
        'meta_title','meta_description','keywords','image_alt',
    ];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(CampaignCategory::class, 'c_category_id');
    }
}
