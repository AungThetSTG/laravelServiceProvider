<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Services\User;

class Student extends Model implements User
{
    //
    public function Login()
    {
        return $this->belongsTo(Login::class);
    }
}
