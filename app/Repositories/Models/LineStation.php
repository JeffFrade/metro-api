<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LineStation extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'lines_station';

    /**
     * @var array
     */
    protected $fillable = [
        'id_station',
        'id_line',
    ];
}
