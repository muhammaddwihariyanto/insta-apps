<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamp = true;
    protected $table = 'users';
    protected $fillable = ['id','name', 'email', 'password'];
    protected $guarded = ['id'];

    public function getAvatar()
    {
        return 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email))) . '?d=mm&s=40';
    }
}
