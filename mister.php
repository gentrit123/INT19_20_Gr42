<html>
    <head>
        <title>Mister</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       
        <style type="text/css">
            {
    box-sizing: border-box;
}
body{
    margin: 10;
    padding: 10;
    font-family: 'Georgia', sans-serif;
    background: #262626;
    overflow-x: hidden;
     
}
.content-box{
    width: 100%;
    height: 100%;
   
    background-size: cover;
    background-repeat: no-repeat;
}
.baner-box{
    width: 100%;
    height: 40rem;
    background: #000000;
    background-color: rgba(0, 0, 0, 0.5);
}
.header{
    width: 80%;
    margin: auto;
    height: 8rem;
    padding: 3rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #ffffff;
}
.header-logo p{
    font-size: 2rem;
    margin: 0;
}
.header-logo small{
    color: #c3c3c3;
}

.header-nav ul{
    padding: 0;
    margin: 0;
    list-style-type: none;
    display: flex;
    justify-content: center;
    align-items: center;
}
.header-nav li{
    width: auto;
    height: auto;
    border-radius: 0.5rem;
    margin: 0.5rem;
    padding: 0.5rem;
    text-align: center;
    text-transform: uppercase;
}
.header-nav li:hover{
    background: #76c38f;
}
.header-nav ul a{
    text-decoration: none;
    color: #ffffff;
}
.slider{
    width: 100%;
    margin: auto;
    height: 30rem;
    padding: 3rem;
    color: #ffffff;  
}
.slider-box, .slider-box-left, .slider-box-right{
    width: 100%;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 1rem;
    position: absolute;
    top: 11rem;
}
.slider-box-left{
    left: -100%;
}
.slider-box{
    left: 0;
    right: 0;
}
.slider-box-right{
    right: -100%;                                                     
}
.slider-text{
    width: 30%;
    height: auto;
    margin-right: 5rem;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
.slider-text p{
    font-size: 3rem;
}
.slider-text button{
    width: 8rem;
    height: auto;
    margin-top: 1rem;
    border: none;
    padding: 0.5rem;
    border-radius: 0.5rem;
    background: #76c38f;
    color: #ffffff;
    cursor: pointer;
    font-family: 'Georgia', sans-serif;
}
.slider-btn-left, .slider-btn-center, .slider-btn-center-fixed, .slider-btn-middle, .slider-btn-right{
    width: auto;
    height: auto;
    border: none;
    margin: 5rem;
    padding: 0.5rem;
    border-radius: 0.5rem;
    background: none;
    font-weight: bold;
    font-size: 2rem;
    color: #ffffff;
    cursor: pointer;
    font-family: 'Georgia', sans-serif;
}
.slider-btn-center-fixed{
    visibility: hidden;
}
.slider-btn-right-fixed{
    visibility: hidden;
}
.slider-btn-left:hover, .slider-btn-center:hover, .slider-btn-center-fixed:hover, .slider-btn-middle:hover, .slider-btn-right:hover, .slider-btn-right-fixed:hover{
    color: #76c38f;
}
.slider-text button:hover{
    background: #76a28e;
}
.slider-box-img{
    width: 20%;
    height: auto;
    padding: 0.5rem;
    margin-right: 5rem;
}
.slider-img{
    width: 23rem;
    height: 23rem;
    border: 1.5rem solid;
    border-color:  rgba(0, 0, 0, 0.8);
    border-radius: 12rem;
    background-image: url(hija-e-gjarpritt.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;    
}
.img-sepia{

    filter: sepia(5%);
}
.img-grayscale{
    filter: grayscale(10%);
}
.services{
    
     width: 80%;
    margin: auto;
    height: 30rem;
    padding: 4.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.services-box{


    
    width: 20%;
    height: 100%;
    color: #303030;
    background-image: url(books1.jpg);
    text-align: center;
    cursor: pointer;
}

.services-box:hover{
    
    color: #262626;
    background: #76c38f;
    
}
.services-box-icon{
    
    margin-top: 2rem;
    font-size: 4rem;
}
.services-box p{
    font-size: 2rem;
    text-transform: uppercase;
}


.dizajn{
    width: 100%;
    height: 200%;
    background-image: url(media/obraz_min.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
.ngjyra{
    width: 100%;
    height: 40rem;
    background: rgb(84,15,133);
    background-color: rgb(60,60,60);
}
.madhsia{
    width: 80%;
    margin: auto;
    height: 8rem;
    padding: 3rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: ;
}
.paragrafi p{
    text-align: left;
    font-size: 2rem;
    margin: 0;
}
.paragrafi small{
    color: #c3c3c3;
}
.ndryshimet{
    width: auto;
    height: auto;
    margin-top: 1rem;
    border: none;
    padding: 0.5rem;
    border-radius: 0.5rem;
    background: #76c38f;
    color: #ffffff;
    text-transform: uppercase;
    cursor: pointer;
    position: absolute;
    top: -100%;
}
. ul{

    padding: 0;
    margin: 0;
    list-style-type: none;
    display: flex;
    justify-content: center;
    align-items: center;
}
.listat li{
    width: auto;
    height: auto;
    border-radius: 0.5rem;
    margin: 0.5rem;
    padding: 0.5rem;
    text-align: center;
    text-transform: uppercase;
}
.listat li:hover{
    background: #76c38f;
}
.listat ul a{
    text-decoration: none;
    color: #ffffff;
    float: right;
}
.container{
    width: 1280px;
    margin: 70px auto ;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.container .box{
    position: relative;
    width: 180px;
    height: 280px;
    background: #ff0;
    margin: 10px;
    box-sizing: border-box;
    display: inline-block;
}
.container .box .imgBox
{
    position: relative;
    overflow: hidden;
}
.container .box .imgBox img
{
    max-width: 200%;
    transition: transform 2s;

}
.container .box:hover .imgBox img
{
    transform:  scale(1.2);
}




        </style>
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
                'text-transform' : 'uppercase',
               'opacity' : '0.5'
            });
           
            
            $('.slider-btn-center').click(function(){
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
           
            
            $('.slider-btn-middle').click(function(){
                $('.slider-box').animate({left:'0%'});
                $('.slider-box-right').animate({right:'-100%'});
            });
            
        });
        function myFunction()
          {
            var muns=parseInt(document.getElementsByTagName('nums').value);
            var numh=parseInt(document.getElementsByTagName('numh').value);
            document.getElementsByTagName('output').innerHTML=nums+numh;
          }
          
        </script>
    </head>
    <body>
        <div class="content-box">
        <div class="baner-box">
            <div class="header">
                <div class="header-logo">
                    <p>Biblioteka Dituria</p>
                    
                </div>
                
                <div class="header-nav" >
                    <ul>
                        <li><a href="projekt.html">Kryefaqja</a></li>
                        <li><a href="horror.html">Horror</a></li>
                        <li><a href="#">Mister</a></li>
                        <li><a href="LibraShkencor.html">Libra Shkencor</a></li>
                        <li><a href="romanca.html">Romance</a></li>
                                            </ul>
                </div>
            </div>
            <div class="slider">
                <div class="slider-box-left">
                    <div class="slider-btn-center-fixed">&gt;</div>
                    <div class="slider-text">
                    <p>Hija e gjarprit 2</p>
                    <small>Libri i tretë dhe i fundit i sagës KRONIKAT E KEINËVEApofisi, gjarpri i Kaosit, kërcënon ta zhytë botën mbarë në terrin e përjetshëm. Karteri dhe Sejdi Keini gjenden përpara një detyre të pamundur: ta asgjësojnë një herë e përgjithmonë.</small>
                    <button type="button">Lexo me shume <span>&raquo;</span></button>
                    </div>
                    <div class="slider-box-img">
                        <i class="fa fa-download services-box-icon" aria-hidden="true"></i>
                        <div class="slider-img img-sepia"></div>
                    </div>
                    <div class="slider-btn-center">&gt;</div>
                </div>
                <div class="slider-box">
                    <div class="slider-btn-left">&lt;</div>
                    <div class="slider-text">
                    <p>Hija e gjarprit </p>
                    <small>Youval Noah Harari, autori i librit më të shitur: “Sapiens: një histori e shkurtër e njerëzimit”, përfytyron botën në një të ardhme jo shumë të largët, në të cilën ne do të përballemi me një sërë sfidash.</small>
                    <button type="button">Lexo me shume<span>&raquo;</span></button>
                    </div>
                    <div class="slider-box-img">
                        <i class="fa fa-download services-box-icon" aria-hidden="true"></i>
                        <div class="slider-img"></div>
                    </div>
                    <div class="slider-btn-right-fixed">&gt;</div>
                    <div class="slider-btn-right">&gt;</div>
                </div>
                
                <div class="slider-box-right"> 
                    <div class="slider-btn-middle">&lt;</div>
                    <div class="slider-text">
                    <p>Hija e gjarprit 3</p>
                    <small>Çdarëdo të besoni:Gjithçka është gati të ndryshojë.Origjina është jashtëzakonisht krijues – romani më i shkëlqyer dhe më zbavitës i Dan Brown-it deri më sot.Për më shumë, ju ftojmë të lexoni review e Ron Charles, editor i “Book World”, rreth romanit Origjina, botuar në gazetën amerikane. Shih</small>
                    <button typ="button">Lexo me shume <span>&raquo;</span></button>
                    </div>
                    <div class="slider-box-img">
                        <div class="slider-img img-grayscale"></div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="services">
            <div class="services-box">
                
                <p>Vajza e dikurshme</p> 
                <small style = "font-size: 20px";>
                <?php
                function pershkrimi(){
                $array = array("Përshkrim " ,"i " , " shkurtër");
                $var = implode("", $array);
                echo $var."<br>";
                }
                pershkrimi();

                ?>
Përshkrim i shkurtër
Një triller psikologjik, që ngërthen fatin e dy grave: të mirën dhe të mistershmen, në një vorbull dysie, vdekjeje dhe mashtrimi. Libri vjen në shqip nga gazetari i njohur Blendi Salaj</small>
            </div>
            <div class="services-box">
            
                <p>Misteret e princeshave te bukura</p>
                <small style = "font-size: 20px";> <?php
                pershkrimi();
                ?> Përshkrim i shkurtër
Këto libra janë përzgjedhur për vajza që nisin të kenë misteret e tyre, të ndërtojnë botën e tyre, dhe të shfaqen të rezervuara në raport me të tjerët. Dy librat e Frances Burnett, “Kopshti i fshehtë” dhe “Princesha e vogël”, “Rebeka” dhe “Etika për vajza” janë pjesë e një seti për të tilla lexuese.... </small>    </div>
            <div class="services-box">
            
                <p>Misteri i trenit blu</p>
                <small style = "font-size: 20px";> <?php
                pershkrimi();
                ?> Përshkrim i shkurtër
Agatha Christie vjen me një tjetër roman në gjuhën shqipe: “Misteri i trenit blu”, i vlerësuar si një nga romanet më të mira në zhanrin mister të kësaj autoreje.</small></div>
            <div class="services-box">
            
                <p>The Mister </p>
                <small style = "font-size: 20px";> <?php
                pershkrimi();
                ?> Përshkrim i shkurtër
Autorja e “50 hijet e Greit” vjen me një roman të ri në shqip, ku ka protagonistë edhe shqiptarë. Një gjë e tillë shkaktoi debate të ashpra në Shqipëri. Nga zemra e Londrës, përmes peizazhit rural të Kornuollit, deri në bukuritë e zymta, të rrezikshme të Ballkanit, The Mister është një udhëtim magjepsës rreziku dhe dëshire që e lë lexuesin pa frymë deri në faqen e fundit.</small></div>
        </div>    
        
                  
              
    <div class="container">
        <div class="box">
            <div class="imgBox">
                <img src="Dhe nuk mbeti askushh .jpg">
            </div>

        </div>
        <div class="box">
            <div class="imgBox">
            <img src="Autobuzi i Drithërimaveee 3 .jpg">
        </div>
    </div>
        <div class="box"><div class="imgBox">
            <img src="Kafshët Fantastike dhe ku mund të gjendenn .jpg">
            
        </div></div>
        <div class="box">
            <div class="imgBox">
                <img src="Gjurmë brengee.jpg">
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="poetii.jpg">
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="vals-ne-shkreteriree.jpg">
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="Sekretii i tretë .jpg">
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="Vajza e letrëss .jpg">
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="Tebas, Misteret e qytetit hyjnorr.jpg">
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="Tregimet e misteritt.jpg">
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="Apokalipsi_sipas_Shën_Tiranëss.jpg">
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="hija-e-gjarpritt.jpg">
            </div>
        </div>
    </div>
     
    <?php
                $nrlibrave  = ["Mister" => 222, "Romance" =>552,"Komedi"=>544,"Horror"=>650];

                $librath= $nrlibrave["Mister"];
                echo "<H3>Numri momental i librave mister ne stock:<H3>";
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
               
        $f = "librisygjeruar.txt";
        $file = fopen($f, 'w');
        if($file == false)
        {
          echo "ERROR - GABIM";
          exit();
        }
        
          ?>
        
    
        

          <a href="ald.html"><h2>Lexuesi i javes</h2></a>
          <br>
          <a href="game.html"><h2>Argetim</h2></a>



        
    </body>
</html>
