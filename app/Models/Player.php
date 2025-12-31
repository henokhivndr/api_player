<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'tb_player';

    protected $primaryKey = 'id_player';

    protected $guarded = ['id_player'];
}
