<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertySecond extends Model
{
    protected $connection = "mysql_2";
    protected $table = 'properties';
    protected $primaryKey = 'id';

    public function Cate(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category')->withDefault();
    }
    public function City(): BelongsTo
    {
        return $this->belongsTo(City::class,'city')->withDefault();
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class,'requested_by')->withDefault();
    }
}
