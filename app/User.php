<?php
namespace App;
class User{
    private $id;
    private $name;
    private $email;
    private $password;

    function __construct(){
        echo 'User is created<br>';
    }

    public function set_id(int $id)
    {
        $this->id = $id;
    }

    public function get_id(){
        return $this->id;
    }

    public function set_name(string $name)
    {
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_email(string $email)
    {
        $this->email = $email;
    }

    public function get_email(){
        return $this->email;
    }

    public function set_password(string $password)
    {
        $this->password = $password;
    }

    public function get_password(){
        return $this->password;
    }

    public function printTime(){
        return $date = date('d-M-Y h:m:i A');
    }
    

}