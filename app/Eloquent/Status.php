<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamp = true;
    protected $table = 'user_status';
    protected $fillable = ['user_id', 'status_text','image_url','video_url','type'];
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(statusComments::class);
    }
    public function likes()
    {
        return $this->hasMany(StatusLikes::class);
    }
}
