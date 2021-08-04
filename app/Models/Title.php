<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'year_published',
        'img_mini',
        'img_big',
        'slug'
    ];

    protected $guarded = [];

    protected $with = (['category','campaign']);

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function campaign() 
    {
        return $this->belongsTo(Campaign::class);
    }
}
