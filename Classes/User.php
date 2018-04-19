<?php
class User{
public $name;
public $nivel;
public $password;

public function __construct($name,$nivel,$password) {
$this->name=$name;
$this->nivel=$nivel;
$this->password=$password;

}

public function getName(){
return $this->name;
}
public function setName($name){
$this->name=$name;
}
public function getNivel(){
return $this->nivel;
}
public function setNivel($nivel){
$this->nivel=$nivel;
}
public function getPassword(){
    return $this->password;
}
public function setPassword($password){
    $this->password=$password;
}
}
?>