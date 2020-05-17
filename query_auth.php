<?php 

require_once("database.php");

function user_login($username, $password){

    $conn = db_connect();
    $sql = "SELECT username,password FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $usr = $row["username"];
            $psw = $row["password"];
            if ($username == $usr) {
                if ($psw == $password) {
                    return true;
                } else {
                    return false;
                }
                break;
            }
        }
    }


}


function get_book($book_id){


    
    $conn = db_connect();
    $sql = "SELECT book_id, title,author,publication_date,price,isbn FROM books";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $book_id = $row["book_id"];
            $title = $row["title"];
            $author = $row["author"];
            $publication_date = $row["publication_date"];
            $price = $row["price"];
            $isbn = $row["isbn"];
        }


    
    }


    return new Book($book_id,$title,$author, $publication_date,$price,$isbn);
}
function get_audiobook($id){
    
    $conn = db_connect();
    $sql = "SELECT audiobook_id, title, author FROM audiobooks where audiobook_id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $audiobook_id = $row["audiobook_id"];
            $title = $row["title"];
            $author = $row["author"];
           
        }


    
    }
    $event = new AudioBook($audiobook_id,$title,$author);
    return $event;
}

function get_email($username)
{
    $conn = db_connect();

    $sql = "SELECT email FROM users WHERE username='" . $username . "'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            $email = $row["email"];
            return $email;
        }
    }
}



function insert_user($username,$name,$email){
    $pdo = new PDO('mysql:host=localhost;dbname=projekti', 'fisi', '1234');

    $query = "INSERT INTO users (username,name,email) 
VALUES(?, ?,?);";   
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $name,$email]);
    return true;
}



function get_username(){

if(isset($_SESSION['username'])){

return $_SESSION['username'];


}
else{


return 'avatar';

}


}

function get_AllEvents()
{
    $conn = db_connect();
    $sql = "SELECT * from books where book_id='11' ";
    $result = $conn->query($sql);

    return $result;
}






class Book
{
    // Properties
    public $book_id,$title, $author, $price, $pub_date, $isbn;


    function __construct($book_id,$title, $author,$pub_date,$price, $isbn)
    {
        $this->book_id = $book_id;
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->pub_datele = $pub_date;
        $this->isbn = $isbn;
    }

    function set_book_id($book_id){
        $this->book_id = $book_id;
    }
    function get_book_id(){
        return $this->book_id;
    }



    function set_title($title){
        $this->title = $title;
    }
    function get_title()
    {
        return $this->title;
    }




    function set_author($author){
        $this->author = $author;
    }
    function get_author()
    {
        return $this->author;
    }






    function set_price($price){
        $this->price = $price;
    }
    function get_price()
    {
        return $this->price;
    }





    function set_date($pub_date){
        $this->pub_date = $pub_date;
    }
    function get_date()
    {
        return $this->pub_date;
    }






}

class AudioBook {

    public $book_id,$title, $author;

    function __construct($book_id,$title, $author)
    {
        $this->book_id = $book_id;
        $this->title = $title;
        $this->author = $author;
        
    }
    

    function set_book_id($book_id){
        $this->book_id = $book_id;
    }
    function get_book_id(){
        return $this->book_id;
    }

    function set_title($title){
        $this->title = $title;
    }
    function get_title()
    {
        return $this->title;
    }




    function set_author($author){
        $this->author = $author;
    }
    function get_author()
    {
        return $this->author;
    }

    function __destruct() {
        
      }


}



?>


