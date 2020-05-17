<?php 

 
require_once('init.php');
require_once('query_auth.php');



if(isset($_POST['do_login'])){

    $username = $_POST['username'];
    $pass = $_POST['password'];

   if(user_login($username,$pass)){
       
       $_SESSION['username'] =$username;
       
       echo 1;
       
       if(isset($_POST['username']) && !empty($_POST['username']))
       {

        $cookie_value=$_POST['username'];
        setcookie('username',$cookie_value, time() + 100000000 );
        }
        else{
            $cookie_value=$_POST['username'];
            setcookie('username', " ", time() + 860000000);

        }


    }
   else{
       echo 2;
   }
    exit();
}






 

?>
