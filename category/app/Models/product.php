<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;


class product extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function products(){

        return $this->hasMany(product::class, 'category');
    }

}
