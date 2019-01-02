<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];

    public function getPathAttribute()
    {
        return asset("api/category/$this->id");
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
