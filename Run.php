<?php
require 'vendor/autoload.php';

use App\User;
use App\Comment;

$user1 = new User();
echo "This user is created at ".$user1->printTime()."<br>";
echo "----------------------------------------------- <br>";

$time2 = "2022-04-27";
$txt = array("Yes","I agree","Thanks bro","I see");
$comment = new Comment($user1,$txt);
$comment->getComments($time2);
