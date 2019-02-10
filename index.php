<?php
/**
 * Created by PhpStorm.
 * User: noman
 * Date: 2019-02-10
 * Time: 10:20 AM
 */
require "start.php";
use Controllers\Users;

$user=Users::create_user("user1","user1@gmail.com","user1_pass");


