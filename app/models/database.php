<?php
/**
 * Created by PhpStorm.
 * User: noman
 * Date: 2019-02-10
 * Time: 11:48 AM
 */

namespace Models;
use Illuminate\Database\Capsule\Manager as Capsule;

class Database{
    function __construct()
    {
        $capsule =new Capsule();
        $capsule->addConnection([
            'driver'=>DBDRIVER,
            'host'=> DBHOST,
            'database'=> DBNAME,
            'username'=>DBUSER,
            'password'=>DBPASS,
            'charset'=>'utf8',
            'collection'=>'utf8_unicode_ci',
            'prefix'=>'',
        ]);
        $capsule->bootEloquent();
    }
}
