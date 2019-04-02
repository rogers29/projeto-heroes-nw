<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
	 protected $fillable = ['name', 'class', 'expertise', 'life', 'defense', 
	 'damage', 'attack_speed', 'move_speed'];

}