<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Auth;

class Dossier extends Model
{
    protected $table='dossiers';
    protected $fillable = [
        'user_id',
        'etat'
    ];
    public function scopeDossiers($query)
    {
        if (Auth::user()->role_id == 2)
        {
            return $query->where('user_id', '=', Auth::user()->id);
        }
        
    }
    public function scopeUser($query)
    {
        return $query->where('id', '=', Auth::user()->id);
        
    }
}
