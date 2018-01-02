<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Services\User;

class Login extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['email', 'password', 'role'];
    //
    public function Teacher(){
        return $this->hasOne(Teacher::class);
    }

}
