<?php

session_start();
//include file(s)
require_once 'class.user.php';
require_once '../conection.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case 'login':
        if(!isset ($_GET['u']) || !isset ($_GET['p'])){
            die("No Messege.");
        }
        $username = $_GET['u'];
        $password = $_GET['p'];

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);

        $process_login = new Controller_User();
        $process_login->doLogin($user);
        break;

    case 'logout':
        $controller_user = new Controller_User();
        $controller_user->doLogout();
        break;

    default:
        break;
}

class Controller_User{
    //Login
    function doLogin(User $user){
        $qLogin = "SELECT * FROM tb_admin WHERE USERNAME = '".mysql_real_escape_string($user->getUsername())."' AND PASSWORD = ('".$user->getPassword()."')";
        $rLogin = mysql_query($qLogin) or die(mysql_error());

        if(mysql_num_rows($rLogin) == 1){
            $data = mysql_fetch_object($rLogin);
            $_SESSION['my_session'] = $data->USERNAME;
            $_SESSION['my_name'] = $data->NAMA;
            echo 'OK';
        }else{
            echo "Maaf, Username and Password tidak sesuai!";
        }
    }

    //Logout
    function doLogout(){
        if(isset ($_SESSION['my_session'])){
            unset ($_SESSION['my_session']);
        }
        echo 'OK';
    }
}
?>