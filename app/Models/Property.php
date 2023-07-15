<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'id';

    public function Cate()
    {
        return $this->belongsTo(Category::class, 'category');
    }
    public function City()
    {
        return $this->belongsTo(City::class,'city');
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'requested_by');
    }
}
