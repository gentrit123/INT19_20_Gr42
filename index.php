<?php 

session_start();



?>

<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel = "stylesheet" href="style1.css">
    <title> Bibloteka Dituria </title>

    
</head>
<body>
    <div class="content-box">
        <div class="baner-box">
            <div class="header">
                <div class="header-logo">
                    <p>Bibloteka Dituria </p>
                </div>
                <div class="header-nav">
                
                    <ul>

                        <button ><a href="#"> Kryefaqja</a></button>
                        <button> <a href="horror.php">Horror </a> </button>
                        <button> <a href="mister.php">Mister </a> </button>
                        <button> <a href="shkencor.php"> Shkencor </a> </button>
                        <button> <a href="romance.php">  Romance </a></button>

                        <?php
                    require_once("database.php");
                    require_once("query_auth.php");
                    $u = get_username();
                //    $u = $_SESSION['username'];
                    echo  (isset($_SESSION['username']) ? "" : "  <button id ='login-accountbutton' style='width:auto;' 
                    class='greenbtn'> Login </button>"  );

                   $cookie = $_COOKIE['username'];
                   echo "<p> <span style= 'color:powderblue;'>Last User: </span>  $cookie </p>";
                  
                    
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
            <div class="slider">
                <div class="slider-box-left">
                    <div class="slider-btn-center-fixed">&gt; </div>
                    <div class="slider-text">
                        <p> Potter 2 dhe Dhoma e te Fshehtave </p>
                        <small>
                            Pershkrim i shkurter
                            Admiruesit e Harrit do te mbeten serish gojehapur. Rowling duhet te jete e diplomuar edhe vete ne Hoguorts, gjykuar nga aftesia
                            per te krijuar nje rrefenje kaq perpirese, plot fantazi, me humor, dhe mbi te gjitha qe te mban pezull deri ne ankth, pa i lene
                            gje magjise. Publisher's Weekly "Harry Potter dhe Dhoma e te Fshehtave", eshte rrefim i mrekullueshem qe te le pa fryme, plote sharm
                            , madje me i bukur sesa libri i meparshem.

                        </small>
                        <button type="button">Lexo me shume <span>&raquo; </span> </button>
                    </div>
                    <div class="slider-box-img">
                        <div class="slider-img1 img-sepia"> </div>
                    </div>
                    <div class="slider-btn-center">&gt; </div>
                </div>
                <div class="slider-box">
                    <div class="slider-btn-left">&lt; </div>
                    <div class="slider-text">
                        <p>Harry Poter and The-Half Blood Prince </p>
                        <small>
                            Pershkrim i shkurter. Harri per pak sa s'e leshoi Topthin nga habia dhe emocioni. Hermiona kishte te drejte. Gdhendur ne siperfaqen
                            e lemuar e te praruar, shiheshin kater fjale te shkuara me nje shkrim te imet dhe te pjerret qe Harri e njohu se ishte
                            shkrimi i Urtimorit. Une hapem kur mbyllem. Sapo i lexoi fjalet, kur ato u zhduken perseri. "Une hapem kur mbyllem... C'kuptim mund te kete valle?"



                        </small>
                        <button type="button"> Lexo me shume <span>&raquo; </span> </button>
                    </div>
                    <div class="slider-box-img">
                        <div class="slider-img2"> </div>
                    </div>
                    <div class="slider-btn-right-fixed">&gt; </div>
                    <div class="slider-btn-right">&gt; </div>
                </div>
                <div class="slider-box-right">
                    <div class="slider-btn-middle">&lt; </div>
                    <div class="slider-text">
                        <p> Potter 3 i burgosuri i Azkabanit</p>
                        <small>
                            J. K. Rowling, me aventurat e Harri Poterit eshte bere autorja e famshme ne bote per librat per femije, nderuar me cmimet
                            me perstigjioze nderkombetare. "J. K. Rowling i meriton te gjitha levdatat qe i jane bere. Edhe njehere:
                            eshte pak te thuhet qe kemi te bejme me nje ngjarje letrare boterore. " Scotland on Sunday "Librat e Harri Poterit jane
                            nga gjerat e rralla qe adhurohen si nga femijet si nga prinderit." The Daily Telegraph



                        </small>
                        <button type="button"> Lexo me shume <span> &raquo; </span> </button>
                    </div>
                    <div class="slider-box-img">
                        <div class="slider-img3 img-grayscale"> </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="services">
            <div class="services-box">


                <p> Mikesha Gjeniale </p>
                <small>
                    Nje liber qe duket sikur njeh vendin ku jetoni ju, nje liber qe ngjan i shkruar per ju, qe duket personal dhe
                    gjitheperfshires, nje liber qe nuk duhet lene t'ju ike pa e njohur. Autorja e ketij romani Mikesha Gjeniale, Elena Ferrante
                    , konsiderohet si shkrimtarja bashkekohore me me ndikim ne letersine e diteve tona.
                </small>
            </div>
            <div class="services-box">
                <p> Duke dhene shpirt </p>
                <small>
                    Romani "Duke Dhene Shpirt", i Uilliam Folknerit renditet nder kryeveprat e letersise moderniste, nje aventure e guximshme
                    ne stil, e cila u kundervihet konvencioneve letrare dhe pushtetit te se shkuares.
                </small>
            </div>
            <div class="services-box">
                <p> Mrekullia</p>
                <small>
                    Ky roman permban mesazhe te rendesishme per te gjithe. Te rriturve u rikujton se sa mizore mund te jete bota e femijeve sidomos
                    kur keta jane "te vecante" dhe se sa dhimbje mund te barte ajo. Ndersa femijeve u jep mesazhe ndergjegjesimi, tolerance dhe
                    miqesie, qe ne kohera si keto te tonat, jane gjithmone te rralla.

                </small>


            </div>
            <div class="services-box">

                <p> Drite e Gushtit</p>
                <small>
                    "Drite e Gushtit" eshte roman qe vleresohet mes kryeveprave te tij. Ky roman futet thelle ne ceshtje thelbesore lidhur me racen,
                    fene, seksualizimin, rolin e kujteses tek vetedija dhe te shkuaren njerezore duke shfaqur ngurtesine morale te nje bashkesie
                    te tere.


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
                <?php
                $nrlibrave  = ["Horror" => 65, "Romance" =>55,"Shkencor"=>54,"Mister"=>22];

                $librath= $nrlibrave["Shkencor"];
                echo "<p>Numri momental i <span style='color:powderblue;'>librave Shkencor </span> ne stock:</p>";
                try{
                if($librath<0)
                {
                    throw new Exception();

                }
                else{
                    echo "<p style='color:grey;'>$librath</p>";
                }
                }
                catch(Exception $ex)
                {
                    echo "<h3>Gabim ne vlere tek : </h3>".$ex; 
                }
                

                $libraH = $nrlibrave['Horror'];
                echo "<p>Numri momental i <span style='color:powderblue;'>librave Horror </span> ne Stock eshte: ";
                try{
                    if($libraH<0)
                    {
                        throw new Exception();
    
                    }
                    else{
                        echo "<p style='color: grey;'>$libraH</p>";
                    }
                    }
                    catch(Exception $ex)
                    {
                        echo "<h3>Gabim ne vlere tek : </h3>".$ex; 
                    }
                    



                ?>

                </div>
                <div class="footer-inside-box">
                <?php
                $nrlibrave  = ["Horror" => 65, "Romance" =>55,"Shkencor"=>54,"Mister"=>22];

                $libraR = $nrlibrave['Romance'];
                echo "<p>Numri momental i <span style='color:powderblue;'>librave Romance </span> ne Stock eshte: ";
                try{
                    if($libraH<0)
                    {
                        throw new Exception();
    
                    }
                    else{
                        echo "<p style='color: grey;'>$libraR</p>";
                    }
                    }
                    catch(Exception $ex)
                    {
                        echo "<h3>Gabim ne vlere tek : </h3>".$ex; 
                    }

                    $libraM = $nrlibrave['Mister'];
                    echo "<p>Numri momental i <span style='color:powderblue;'>librave Mister </span> ne Stock eshte: ";
                    try{
                        if($libraM<0)
                        {
                            throw new Exception();
        
                        }
                        else{
                            echo "<p style='color: grey;'>$libraM</p>";
                        }
                        }
                        catch(Exception $ex)
                        {
                            echo "<h3>Gabim ne vlere tek : </h3>".$ex; 
                        }
                        
    

                ?>
                </div>
                <div class="footer-inside-box">
                <?php
                $nrlibrave  = ["Horror" => 65, "Romance" =>55,"Komedi"=>55,"Mister"=>22, "Total"=>196];

                $librath= $nrlibrave["Total"];
                echo "<H3>Numri total i librave ne stock:<H3>";
                try{
                if($librath<0)
                {
                    throw new Exception();

                }
                else{
                    echo "<h1 style='color: powderblue;'>$librath</h1>";
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
                <div class="footer-inside-box">
                <ul>
          <li> <a href="#"> <span>&raquo; </span style='color: powderblue;'> Dergo ne Fillim te Faqes </a> </li>
          
          
          </ul>
                </div>
            </div>
            <P> Na kontaktoni ne email: <a href="mailto:gm@gmail.com"> gm@gmail.com </a> </P>
        </div>
    </div>
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
        <form class="modal-content animate" method="post" action="signup.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                Signup
                
                <br>
                <input type="text" placeholder="Enter your name" name="fname" id="fname" required class="uname">
                
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" id="uname" required class="uname">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="psw1" name="psw" required class="password">
                <input type="password" placeholder="Re-enter Password" id="psw2" name="psw2" required class="password">
                Email
                <input type="email" placeholder="Your email" name="email" id ="email" required class="signupemail" style="width:100%; height:50px; padding: 12px 20px;" required>
                <button type="submit" class="logsubmit" id="signupButton1" >Sign up</button>
                <br>
                <br>
            </div>
        </form>
    </div>


    <script src="https://apis.google.com/js/platform.js" async defer></script>

<meta name="google-signin-client_id" content="991209987037-ai24ultf2fv5i9up0kiiv1bmjik38hho.apps.googleusercontent.com">


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


<!-- <script type="text/javascript">
        function signup() {
            var username = $("#uname").val();
            var pass = $("#psw2").val();
            
            var fname = $("#fname").val();
            var email = $("#email").val();

            alert(username);
           // console.log("inside signup");
            // $.ajax({
            //     type: 'post',
            //     url: 'signup.php',
            //     data: {
            //         signup:"signup",
            //         username: username,
            //         password: pass,
            //         fname:fname,
            //         email:email
            //     },
            //     success: function(response) {
            //         if (response == 1) {
            //           window.location.replace('audio.php');
                      
            //         } else if (response == 2) {
                       
            //           alert("failure");
            //         }
            //     }
            // });
            return false;
        }


        </script> -->


<script>
        //dipslays the login(modal)
        var signup = document.getElementById('signupButton');
        

        signup.addEventListener('click', () => {
            var s = document.getElementById('signup');
            var modal = document.getElementById('id01');
            modal.style.display = "none";
           s.style.display = 'block';
        
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
