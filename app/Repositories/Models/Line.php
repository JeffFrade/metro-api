<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Line extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'number',
        'name',
        'inaugurated'
    ];
}
