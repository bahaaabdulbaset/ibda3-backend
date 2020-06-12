<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{

    protected $table = 'users';
    public $timestamps = true;

    public function pages()
    {
        return $this->hasMany('App\Models\Page');
    }

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

    public function postes()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }



}