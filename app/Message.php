<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded=['id'];
    protected $table='message';
    protected $fillable =[
        'subject',
        'message',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
