<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Position;

class Player extends Model
{
    protected $table = 'tb_player';

    protected $primaryKey = 'id_player';

    protected $guarded = ['id_player'];

     public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'id_position');
    }
}
