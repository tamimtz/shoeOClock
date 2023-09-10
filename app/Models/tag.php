<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function menProducts() {

        return $this->morphedByMany(MenProduct::class, 'taggable'); 

    }

    public function womenProducts() {

        return $this->morphedByMany(MenProduct::class, 'taggable'); 

    }



}