<!doctype html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel = "stylesheet" href="style1.css">


  <title> Libra Shkencor </title>
  
  
  </head>
  <body> 
  <div class="content-box">
        <div class="baner-box">
            <div class="header">
                <div class="header-logo">
                    <p>Libra Shkencor </p>
                </div>
                <div class="header-nav">
                
                    <ul>

                        <button ><a href="index.php"> Kryefaqja</a></button>
                        <button> <a href="horror.php">Horror </a> </button>
                        <button> <a href="mister.html">Mister </a> </button>
                        <button> <a href="#"> Shkencor </a> </button>
                        <button> <a href="Romance.html">  Romance </a></button>

                        <?php
                    require_once("database.php");
                    require_once("query_auth.php");
                    $u = get_username();
                //    $u = $_SESSION['username'];
                    echo  (isset($_SESSION['username']) ? "" : "  <button id ='login-accountbutton' style='width:auto;' 
                    class='greenbtn'> Login </button>"  );

                  
                  
                    
                         ?>
                        
                    </ul>
                    

                </div>
                <?php 
                         
                         require_once("database.php");
                         require_once("query_auth.php");
                         $u = get_username();
                         
                         echo  (isset($_SESSION['username']) ? "<a href ='account.php'><img class='circular--square' src='images/$u.jpg'style=' position: relative;
                         width: 70px;
                         height:70px;
                         overflow: hidden;
                         border-radius: 50%; margin-top:2%;margin-left:13%; color:white;'></a> ": "  ");
                        
                         echo (isset($_SESSION['username']) ? " <a href='logout.php'>  <button id='logout'> Log Out </button> </a>" : "  ");
                         
                         
                         
                         ?>
            </div>
            <div id="id01" class="modal">
        <form class="modal-content animate" action="ajax.php" onsubmit="return do_login();">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/avatar.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
            <div class="g-signin2" data-onsuccess="onSignIn" id="googlebutton"></div>
                <label for="uname"><b>Username</b>
                </label>
                <input type="text" placeholder="Enter Username" name="uname" required class="uname" id="username">
                <div class="loader-wrapper">
                    <span class="loader"><span class="loader-inner"></span></span>
                </div>
                <label for="psw"><b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="psw" class="password" id="password">
                <h5 class="errorlabel"></h5>
                <button type="submit" class="logsubmit">Login</button>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                <br>
                <br> Not a member Yet ?
                <button type="button" id="signupButton" title="Close Modal"> Signup </button>
            </div>
        </form>
    </div>
    <div id="signup" class="signupclass">
        <form class="modal-content animate" action="signup.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                Signup
                <!-- <h1 style="margin-left: 35%;"> SIGN UP</h1> -->
                <br>
                <input type="text" placeholder="Enter your name" name="fname" required class="uname">
                
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required class="uname">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="psw1" name="psw" required class="password">
                <input type="password" placeholder="Re-enter Password" id="psw2" name="psw2" required class="password">
                Email
                <input type="email" placeholder="Your email" name="email" required class="signupemail" style="width:100%; height:50px; padding: 12px 20px;" required>
                <button type="submit" class="logsubmit" id="signupButton1" onclick="return Validate()">Sign up</button>
                <br>
                <br>
            </div>
        </form>
    </div>


      <div id="slider">
        <div class="slider-box-left">
          <div class="slider-btn-center-fixed">&gt;</div>
          <div class="slider-text">
            <p> A Brief History of Time </p>
            <small>
            Ky eshte nje liber i njohu per kozmologji. Autori shkruan per strukturen, origjinen dhe zhvillimin e univerzit, e cila
              eshte objekt studimi i astronomise dhe fizikes moderne. Ai flet per konceptet bazike, sic jane koha dhe hapesira, 
              po ashtu edhe per gravitetin, Big Bang dhe vrimin e zeze. Ka qene BestSeller per 20 vite me radhe.
            </small>
            <button type="button"> Lexo me shume <span>&raquo; </span> </button>
            </div>
          <div class="slider-box-img">
            <div class="slider-img1Sh img-sepia"> </div>
            </div>
          <div class="slider-btn-center">&gt; </div>
          </div>
        <div class="slider-box">
          <div class="slider-btn-left">&lt; </div>
          <div class="slider-text">
            <p> The Selfish Gene </p>
            <small>
            Autori vazhdon teorine kryesore te adaptimit dhe selektimit natyral te George Williams.
              Ai perdor termin "selfish gene", si menyre per t'a shpjeguar "gene-centred" menyren e evolucionit.
              Sipas kesaj teorie, sa me shume dy persona jane gjenetikisht te lidhur, aq me jovetjak do te jene me njeri-tjetrin.
              Ky liber ka bere 30 vjet qe kur eshte botuar dhe konsiderohet si libri shkencor me influencen me te madhe ne bote
              ndonjehere.
            
            </small>
            
            <button type="button">Lexo me shume <span>&raquo; </span> </button>
            </div>
          <div class="slider-box-img">
            <div class="slider-img2Sh"> </div>
            </div>
          <div class="slider-btn-right-fixed">&gt; </div>
          <div class="slider-btn-right">&gt; </div>
          </div>
        <div class="slider-box-right">
          <div class="slider-btn-middle">&lt; </div>
          <div class="slider-text">
            <p> The Feynman Lectures on Physics </p>
          <small>
            Eshte nje liber rreth fizikes, bazuar ne disa shenime te Richard Feynman. Laureat i cmimit "Nobel", dhe nganjehere
            i ashtuquajtur su "Shpjeguesi i Shkelqyer". Ky liber ka tre vellime. Vellimi i pare flet kryesisht per mekaniken, 
            rrezatimin dhe nxehtesine. I dyti, flet me shume rreth elektromagnetizmit dhe i treti ka temen e mekanikes kuantike.
            Po ashtu ne disa kapituj flitet per lidhjen e matematikes me fiziken dhe lidhjen e fizikes me shkencat tjera. 
            
            
            </small>
          <button type="button"> Lexo me shume <span>&raquo; </span> </button>
            </div>
          <div class="slider-box-img">
            <div class="slider-img3Sh img-grayscale"> </div>
            </div>
          </div>
        </div>
      
      
          
          </div>
            <div class="services">
              <div class="services-box">
                <p> Physica by Aristotle</p>
                <small> 
                Aristoteli vendosi token ne qender te univerzit. Konsideroi se univerzi edhe nje set sferave brenda tij.
                  Ai gabimisht konkludoi se gjerat levizin ndryshe ne toke dhe ndryshe dikund tjeter. Ai bie ne kundershtim me 
                  Platonin i cili donte arsye per gjithcka
                
                </small>
                </div>
              <div class="services-box">
                <p> Relativity </p>
            <small>
                Eshte nje liber i publikuar ne vitin 1916 nga Albert Einstein. Ne kete liber shpjegohet teoria e relativitetit.
              Sipas kesaj teorie te paraqitur nga Einstein, koha dhe hapesira nuk jane absolute, dhe se si reference per gjithcka
              merret shpejtesia e drites, e cila eshte absolute. Ky liber po ashtu shpejgon edhe shume koncepte tjera te cilat 
              kerkojne shume vemendje per t'i lexuar dhe kuptuar.
                
                
                </small>
            </div>
              <div class="services-box">
              <p> What is Life? </p>
              <small> 
               Nje liber i shkruar nga Erwin Schrodinger ne vitin 1944. Ky liber pershkruan, nga nje perspektive e fituesit te cmimit 
                "Nobel" per fizike, se si organizmat e gjalle dallojne nga objektet jo te gjalla, si kristali.
                Po ashtu pershkruan se si te dy keto grupe i binden ligjeve te ndryshme nga njera-tjera
                
                
                
                </small>
              
              </div>
            <div class="services-box">
              <p> The Cosmic Connection </p>
              <small>
           Nje liber i shkruar nga Carl Segan. Ne kohen sa NASA ishte duke zhvilluar programin per anijet kozmike Apollo, Carl 
                Segan me koleget e tij publikuan librin i cili kishte temen rreth univerzit. Ata kryesisht kishin temen 
                e sistemit solar. Po ashtu ai parashikoi edhe ekzistencen e disa planeteve rreth yjeve tjera, 2 dekada pa u 
                zbuluar.
              
              
              </small>
              
              </div>
      </div> 
    <div class="latestwork">
      <div class="latestwork-btn"> Ardhjet e Reja </div>
      <div class="latestwork-box-img">
   
        <div class="latestwork-img1"> </div>
        <div class="latestwork-img2"> </div>
        <div class="latestwork-img3"> </div>
        <div class="latestwork-img4"> </div>
        <div class="latestwork-img5"> </div>
        <div class="latestwork-img6"> </div>
  </div>
      </div>
    <div class="footer-box">
      <div class="footer">
        <div class="footer-inside-box">
          <h1> Libraria Dituria</h1>
          <canvas id="libraria" width="300" height="200" style="border:1px solid #d3d3d3;">

</canvas>
  </div>
        <div class="footer-inside-box">
          <h4> Link i shpejte </h4>
          <ul>
          <li> <a href="#"> <span>&raquo; </span> Dergo ne Fillim te Faqes </a> </li>
          
          
          </ul>
          </div>
        <div class="footer-inside-box">
        <?php
                $nrlibrave  = ["Horror" => 65, "Romance" =>55,"Komedi"=>54,"Mister"=>22];

                $librath= $nrlibrave["Komedi"];
                echo "<H3>Numri momental i librave Shkencor ne stock:<H3>";
                try{
                if($librath<0)
                {
                    throw new Exception();

                }
                else{
                    echo "<h1>$librath</h1>";
                }
                }
                catch(Exception $ex)
                {
                    echo "<h3>Gabim ne vlere tek : </h3>".$ex; 
                }
                finally{
                    echo "<h2>Lexim te kendshem</h2>";
                }
                ?>

          </div>
        </div>
      
      <p> Na kontaktoni ne email: <a href="mailto:gm@gmail.com"> gm@gmail.com  </a></p>
        </div>
    </div>
    </div>
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="jquery.scrollTo.min.js"></script>

    <script>
  $(document).ready(function(){
  $imgtext = $("<p>lorem ipsum dolar</p>");
  $imgtext.css({
    'background' : '#000000',
    'color' : '#ffffff',
    'margin-top' : '9.9em',
    'padding' : '0.5rem',
    'text-transform' : ' uppercase',
    'opacity' : '0.5'
  });
  $('.latestwork-img').hover(function(){
    $(this).append($imgtext);
  });
  $('.slider-btn-center').click(function(){
    $('.slider-box-left').animate({left:'-100%'});
     $('.slider-box').animate({right:'0'});
  });
  $('.slider-btn-center-fixed').click(function(){
    $('.slider-box-left').animate({left:'-100%'});
    $('.slider-box').animate({right:'0'});
  });
  $('.slider-btn-left').click(function(){
    $('.slider-box').animate({right:'-200%'});
     $('.slider-box-left').animate({left:'0'});
  });

  $('.slider-btn-right').click(function(){
    $('.slider-box').animate({left:'-200%'});
    $('.slider-box-right').animate({right:'0'});
  });
  $('.slider-btn-right-fixed').click(function(){
    $('.slider-box').animate({left:'-200%'});
    $('.slider-box-right').animate({right:'0'});
  });
  $('.slider-btn-middle').click(function(){
    $('.slider-box').animate({left:'0%'});
    $('.slider-box-right').animate({right:'-100%'});
                                   });
});
</script>

    
<script>
        var button = document.getElementById('login-accountbutton');
        var modal = document.getElementById('id01');
        button.addEventListener('click', () => {
            modal.style.display = "block";
        });
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script type="text/javascript">
        function do_login() {
            var username = $("#username").val();
            var pass = $("#password").val();
            console.log("inside do_login");
            $.ajax({
                type: 'post',
                url: 'AJAX.php',
                data: {
                    do_login: "do_login",
                    username: username,
                    password: pass
                },
                success: function(response) {
                    if (response == 1) {
                      window.location.replace('audio.php');
                      
                    } else if (response == 2) {
                       
                      alert("failure");
                    }
                }
            });
            return false;
        }


        


        </script>

<script>
        //dipslays the login(modal)
        const signup = document.getElementById('signupButton');

        signup.addEventListener('click', () => {
            var s = document.getElementById('signup');
            var modal = document.getElementById('id01');
            modal.style.display = "none";
           s.style.display = 'block';
        
        });
    </script>
        <script type="text/javascript">
        $(function() {
            //checks if passwords are the same
            $("#signupButton1").click(function() {
                var passalert = document.getElementById('alert');
                var password = $("#psw1").val();
                var confirmPassword = $("#psw2").val();
                if (password != confirmPassword) {
                    swal({
                        title: "Passwords do not match",
                        type: "error",
                        showConfirmButton: true,
                        showCancelButton: false,
                        customClass: "Custom_Cancel",
                        confirmButtonColor: "#DD6B55"
                    });

                    return false;
                }
                swal({
                    title: "Success",
                    type: "success",
                    showConfirmButton: false,
                    customClass: "success",
                    timer: 1500

                });

                return true;
            });
        });
    </script>
    <script>
        function showDiv() {
            document.getElementById('map').style.display = "block";
            document.getElementById('budget-4id').style.display="none";
        }
        function removeDiv() {
            document.getElementById('map').style.display = "none";
            document.getElementById('budget-4id').style.display="block";
        }
    </script>
 <script src="https://apis.google.com/js/platform.js" async defer></script>

<meta name="google-signin-client_id" content="991209987037-ai24ultf2fv5i9up0kiiv1bmjik38hho.apps.googleusercontent.com">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="jquery.scrollTo.min.js"></script>
  
    <script>

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();

  var email = profile.getEmail();
  var name = profile.getName();
//   var id = profile.getID();
//   var profileimage = profile.getImageUrl();

  var username  = email.substring(0, email.lastIndexOf("@"));
var domain = email.substring(email.lastIndexOf("@") +1);





    $.ajax({
                type: 'post',
                url: 'googlelogin.php',
                data: {
                    email: email,
                    username: username,
                    name:name
                },
                success: function(response) {
                    
                    if (response == 1) {
                        window.location.replace('audio.php');

                    } else if (response == 2) {
                        alert("Failure");
                    }

                }
            });





}

</script>


  
  </body>


</html>
        
