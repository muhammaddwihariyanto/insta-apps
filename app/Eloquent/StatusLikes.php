<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class StatusLikes extends Model
{
    public $timestamp = true;
    protected $table = 'user_status_likes';
     protected $fillable = ['id','status_id','user_id', 'comment_text'];
    protected $guarded = ['id'];

    public function status()
    {
        return $this->hasOne(Status::class);
    }
}
