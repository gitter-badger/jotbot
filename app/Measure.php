<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    public $timestamps = false;
    protected $table = 'measures';
    protected $fillable = ['unit', 'abr', 'toPounds', 'fromPounds'];

    /* RELATIONSHIPS */
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
