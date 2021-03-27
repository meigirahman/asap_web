<?php

class globalConfiguration {
    //Global Configuration
 
    // private $serverName = "localhost";
    // private $user = "mubakabc_admin";
    // private $password = "m31g1r4hm4n";
    // private $databaseName = "mubakabc_asap";
 
    
        private $serverName = "localhost";
    private $user = "root";
    private $password = "";
    private $databaseName = "asap_online";
    
 
    private $siteName = "ASAP";
 
                
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