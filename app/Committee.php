<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $table = 'committees';
    protected $fillable = ['loan_id', 'role_id', 'user_id', 'committee_role', 'vote_status', 'vote_request_date', 'vote_received_date', 'vote_id'];

    /* RELATIONSHIPS */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    /* RELATIONSHIPS */

    /* METHODS */
    /* METHODS */
}
