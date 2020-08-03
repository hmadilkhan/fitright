<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    //

    public $fillable = [
        'username',
        'name',
        'about',
        'avatar_id',
        'cover_id',
        'cover_position',
        'type',
        'hide_cover',
        'background_id',
        'deleted_at',
    ];

    protected $casts = [
        'id'             => 'integer',
        'username'       => 'string',
        'name'           => 'string',
        'about'          => 'string',
        'avatar_id'      => 'integer',
        'cover_id'       => 'integer',
        'cover_position' => 'string',
        'type'           => 'string',
        'deleted_at'     => 'datetime',
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function avatar()
    {
        return $this->belongsTo('App\Media', 'avatar_id');
    }

    public function cover()
    {
        return $this->belongsTo('App\Media', 'cover_id');
    }
}
