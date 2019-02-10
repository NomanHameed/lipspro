<?php
/**
 * Created by PhpStorm.
 * User: noman
 * Date: 2019-02-10
 * Time: 11:48 AM
 */
namespace Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{

    protected $table="users";
    protected $fillable=['username','email','pass'];

}
