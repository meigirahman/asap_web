<?php

class globalConfiguration {
    //Global Configuration
    // private $serverName = "10.16.156.11";
    private $serverName = "localhost";
    private $user = "root";
    private $password = "";
    private $databaseName = "rka";
    private $siteName = "BESATI SEKAYU";

    public function getServerName() {
        return $this->serverName;
    }

   public function getUser() {
        return $this->user;
    }

   public function getPassword() {
        return $this->password;
    }

   public function getDatabaseName() {
        return $this->databaseName;
    }

   public function getSiteName() {
        return $this->siteName;
    }
}
?>