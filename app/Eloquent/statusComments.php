<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class statusComments extends Model
{
    public $timestamp = true;
    protected $table = 'user_status_comments';
     protected $fillable = ['id','status_id','user_id', 'comment_text'];
    protected $guarded = ['id'];

    public function status()
    {
        return $this->hasOne(Status::class);
    }
}
