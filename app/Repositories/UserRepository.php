<?php
/**
 * Created by PhpStorm.
 * User: aungthetwin
 * Date: 2017/12/31
 * Time: 21:04
 */

namespace App\Repositories;

use App\Models\Teacher;
use App\Models\Login;
use App\AbstractModels\UserAbstract;

class UserRepository extends UserAbstract{

    protected $model = Teacher::class;

}