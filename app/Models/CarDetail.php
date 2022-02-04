<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class CarDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'path'
    ];

    public function title(){
        return $this->hasMany(Home::class);
    }

    // public function review(){
    //     return $this->hasMany(Home::class);
    // }

    // public function scopemostReviewedcar(Builder $query){
    //     return $query->withCount('review')->orderBy('review_count', 'desc');
    // }
}


