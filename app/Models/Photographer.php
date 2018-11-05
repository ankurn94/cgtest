<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photographer';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'bio','profile_picture'];

    public function album(){
        return $this->hasMany('App\Models\Album');
    }

}