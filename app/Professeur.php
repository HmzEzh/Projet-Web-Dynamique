<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Auth;

class Professeur extends Model
{
    protected $table='professeurs';
    protected $fillable = [
        'nom',
        'email',
        'user_id',
    ];
    public function scopeProfs($query)
    {
        if (Auth::user()->role_id == 2)
        {
            return $query->where('user_id', '=', Auth::user()->id);
        }
        
    }
    public function scopeUser($query)
    {
        return $query->where('user_id', '=', Auth::user()->id);
    }
}
