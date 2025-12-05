<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'ticket_id',
        'first_name',
        'last_name',
        'email',
        'subject',
        'message',
    ];
}
