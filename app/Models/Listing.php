<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{


    //Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
