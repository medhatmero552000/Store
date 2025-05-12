<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory,Translatable;
    protected $table = 'settings';
    protected $guarded = []; 
    public $translatedAttributes = ['plan_value'];

    protected $casts = [
        'is_translatable' => 'boolean',
    ];
}
