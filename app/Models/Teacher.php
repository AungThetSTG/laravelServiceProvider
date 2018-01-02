<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Login;

class Teacher extends Model
{
    protected $fillable = ['name','login_id'];

    public static function create(array $attribute = []){
        $attribute['role'] = 'teacher';
        $teacher = static::query()->create([
            'name' => $attribute['name'],
            'login_id' => Login::create($attribute)->id
        ]);
        return $teacher;
    }

    public function Login()
    {
        return $this->belongsTo(Login::class);
    }
}
