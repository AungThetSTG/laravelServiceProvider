<?php namespace App\AbstractModels;
/**
 * Created by PhpStorm.
 * User: aungthetwin
 * Date: 2018/01/01
 * Time: 22:40
 */
use \App\Services\UserInterface;
use \App\Models\Teacher;

abstract class UserAbstract implements UserInterface{

    protected $model;

    public function create(array $attribute){
        return call_user_func_array("{$this->model}::create", array($attribute));
    }
}