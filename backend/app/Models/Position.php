<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Position extends Model
{
    protected $table = 'tb_position';

    protected $primaryKey = 'id_position';

    protected $guarded = ['id_position'];

    public function players()
    {
        return $this->hasMany(Player::class, 'position_id', 'id_position');
    }
}
