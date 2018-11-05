<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'album';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'img', 'date','featured','photographer_id'];

}