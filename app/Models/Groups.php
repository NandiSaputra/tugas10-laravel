<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;
    protected $guarded = ['mana'];
    public function Friends()
    {
        return $this->hasMany('App\Models\Friends');
    }
}
