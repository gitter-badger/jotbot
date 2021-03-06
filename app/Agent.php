<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agents';
    protected $fillable = ['agency_id', 'agent', 'agent_phone', 'agent_email'];

    /* RELATIONSHIPS */
    public function agency()
    {
        return $this->belongsTo('App\Agency');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
