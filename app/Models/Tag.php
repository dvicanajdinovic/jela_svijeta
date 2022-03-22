<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Tag extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $fillable = ['title'];
    public $translatedAttributes = ['title'];

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'meal_tags');
    }
}
