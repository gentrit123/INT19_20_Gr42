
    <?php
    require_once('database.php');
    require_once('init.php'); 
    $conn = db_connect();

    

    //Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username =  $_POST['uname'];
    $fname = $_POST['fname'];
    $userpassword = $_POST['psw2'];
    $email = $_POST['email'];

    $pdo = new PDO('mysql:host=localhost;dbname=projekti', 'fisi', '1234');


    $query = "INSERT INTO users (username, name,email,password) 
VALUES(?, ?,?,?);";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $email,$fname, $userpassword]);

    

    require_once('query_auth.php');

    if(user_login($username,$userpassword)){
        $_SESSION['username'] = $username;
        echo "<script> window.location.replace('audio.php');</script>";

    }

 else {
        echo "<script>alert('Something went wrong);</script>";
    }


    $conn->close();
    ?>
