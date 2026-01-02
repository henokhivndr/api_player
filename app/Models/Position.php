<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'tb_position';

    protected $primaryKey = 'id_position';

    protected $guarded = ['id_position'];
}
