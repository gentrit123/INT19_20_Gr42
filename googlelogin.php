<?php 


require_once('init.php');
//require_once('authenticate.php');
require_once("query_auth.php");

if(isset($_POST['email'])){


    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];

    
if(get_email($username) == $email){
    $_SESSION['username'] = $username;
    echo 1;
    exit();
}


if(empty(get_email($username)))
{
    
    if(insert_user($username,$name,$email)){
        $_SESSION['username'] = $username;
        echo 1;
        exit();

    }

}


else{
    echo 2;
    exit();
}

    exit();

}

?>
