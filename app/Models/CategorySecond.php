<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySecond extends Model
{
    protected $connection = "mysql_2";
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function Pro()
    {
        return $this->hasMany(Property::class, 'category', 'id')->latest();
            // ->limit(6)
            // ->get();
    }
}
