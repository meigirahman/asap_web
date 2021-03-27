<?php

class User{
    private $username;
    private $password;
    private $nama;

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getNama(){
        return $this->nama;
    }
}
?>