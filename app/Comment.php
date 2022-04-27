<?php
namespace App;
class Comment{
    private $user;
    private $comments;

    function __construct($user,$texts){
        $this->user = $user;
        $date = date('Y-m-j');
        $ar;
        foreach ($texts as $t)
        {
            $ar[$t] = $date;
            $newdate = strtotime('+1 day',strtotime($date));
            $newdate = date('Y-m-j',$newdate);
            $date = $newdate;
        }
        $this->comments = $ar;
    }

    public function getComments($time){
        echo $time;
        echo "<br>";
        foreach($this->comments as $cmt => $cmt_time)
        {
            if ((strtotime($cmt_time) > strtotime($time)))
            {
                echo $cmt ."   -   ".$cmt_time."<br>";
            }
        }
    }
}