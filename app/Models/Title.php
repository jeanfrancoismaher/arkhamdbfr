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

    protected $with = (['category']);

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}
