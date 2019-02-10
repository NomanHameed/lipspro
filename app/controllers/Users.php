<?php
/**
 * Created by PhpStorm.
 * User: noman
 * Date: 2019-02-10
 * Time: 1:06 PM
 */
namespace Controllers;
use Models\User;

class Users{

    public static function create_user($username,$email,$password){
        $user=User::create(['username'=>$username , 'email'=>$email, 'password'=>$password]);
        return $user;
    }
}
