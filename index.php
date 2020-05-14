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

                        <button ><a href="project.html"> Kryefaqja</a></button>
                        <button> <a href="horror.html">Horror </a> </button>
                        <button> <a href="mister.html">Mister </a> </button>
                        <button> <a href="LibraShkencor.html"> Shkencor </a> </button>
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
                    <h4> Thenje per ju</h4>
                    <p>
                        "Ekzitojne dy dite ne vite qe nuk mund te besh asgje: njera quhet "dje" dhe tjetra "neser".
                        Prandaj e sotmja eshte nje dite e pershtatshme te duash, te besosh dhe kryesisht te jetosh!"
                    </p>\



                </div>
                <div class="footer-inside-box">
                    <h4> Link i shpejte</h4>
                    <ul>
                        <li> <a href="#"> <span> &raquo; </span> Dergo ne fillim </a> </li>
                    </ul>
                </div>
                <div class="footer-inside-box">
                    <h4> Komentet nga lexuesit</h4>
                    <p>
                        <span class="footer-green"> Albin Mehmeti </span> Faleminderit shume, jeni faqe shume e qelluar, na ndihmoni
                        shume ne pergjezhjen e librave per te lexuar dhe mbi te gjitha na dhuroni libra falas.
                    </p>
                    <p>
                        <span id="footer-green"> Fiona Ahmeti </span> Vetem vazhdoni pune shumee qelluar, sepse shoqeria jone e "teknologjise"
                        ka shume nevoje per libra te tille.
                    </p>
                </div>
                <div class="footer-inside-box">
                    <h4> Kontakti: </h4>
                    <form>
                        <input type="text" placeholder="Emri dhe Mbiemri">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Subjekti">
                        <input type="text" placeholder="Mesazhi">
                        <button type="submit"> Ruaj</button>

                    </form>
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




</body>

</html>
