<html>
  <head>
    <title>Libra horror </title>
    <style>
      body
      {
        overflow-x:hidden;
        background-color:#f1f1f1;
        background-image:url(horrorlibri.jpg);
        background-repeat:repeat;
        background-position:100px;
        background-size:100%;
        
      }
      h2
      {
        color:red;
        
      }
      h3
      {
        color:red
          
      }
      #div4
      {
        color:red;
        border:2px solid red;
        width:400px;
        resize:horizontal;
        overflow:auto;
        outline:4px solid blue;
        outline-offset:5px;
        margin:20px;
        
      }
      #h1
      {
        text-shadow:3px 3px;
      }
      #div2{
        width:500px;
        height:300px;
        margin:100px auto;
        background:#008;
        background:-webkit-linear-gradient(top,black,white);
        position:relative;
        bottom:220px;
        left:5px;
        transform:scale(1,1);
        transform:skew(6deg,6deg);
        
      
      }
      #div3
      {
        width:300px;
        height:300px;
        margin:100px auto;
        background:#008;
        background:-webkit-radial-gradient(circle,white,black);
        position:relative;
        bottom:390px;
        left:400px;
        transform:translate(20px,20px);
        transform:rotateX(10deg);
        transform:rotateY(10deg);
        
      }
      #div1
      {
        border-size:contain;
        width:100px;
        position:relative;
        top:50px;
        left:20px;
        background:red;
        border:30px solid transparent;
        border-image-source:url(horror.jpg);
        border-image-slice:100;
        border-image-repeat:no-repeat;
        background-origin:content-box;
        transform:translate3d(20px,20px,20px);
        transform:scale3d(1,1);
        transform:rotateZ(20deg) rotateX(5deg) rotate(5deg) perspective(20px);
        
        
      }
      .box
      {
        
        background:red;
        padding:2em;
        box-shadow:red 20px 20px 20px;
         border-radius:30px;
        
      }
      #div5 
      {
        color:red;
        width:150px;
        height:150px;
        background-color:black;
        animation-name:shembull;
        animation-duration:60s;
        border-radius:50%;
        text-align:center;
        position:relative;
        top:-450px;
        right:300px;
        
      }
@keyframes shembull{
  from{background-color:black;}
  to{background-color:white;}
      }
      .content-box
      {
        width:100%;
        height:100%;
        background-size:cover;
        background-repeat:no-repeat;
      }
      .baner-box
      {
        width:100%;
        height:40rem;
        background:#000000;
        background-color:rgba(0,0,0,0.5);
        
      }
      .header
      {
        width:80%;
        margin:auto;
        height:8rem;
        padding:3rem;
        display:flex;
        justify-content:space-between;
        align-items:center;
        color:#ffffff;
        
        
      }
      .header-logo p
      {
        font-size:2rem;
        margin:0;
      }
      .header-logo small
      {
        color:#c3c3c3;
      }
      .header-nav ul
      {
        padding:0;
        margin:0;
        list-style-type:none;
        display:flex;
        justify-content:center;
        align-items:center;
      }
      .header-nav li
      {
        width:auto;
        height:auto;
        border-radius:0.5rem;
        margin:0.5rem;
        padding:0.5rem;
        text-align:center;
        text-transform:uppercase;
      }
      .header-nav li:hover
      {
        background:#76c38f;
      }
      .header-nav ul a
      {
        text-decoration:none;
        color:#ffffff;
      }
      .slider
      {
        width:100%;
        margin:auto;
        height:30rem;
        padding:3rem;
        color:#ffffff;
        
        
        
      }
      .slider-box, .slider-box-left, .slider-box-right
      {
        width:100%;
        margin:auto;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-wrap:wrap;
        padding:1rem;
        position:absolute;
        top:11rem;
      }
      .slider-box-left
      {
        left:-100%;
      }
      .slider-box
      {
        left:0;
        right:0;
      }
      .slider-box-right
      {
        right:-100%;
      }
      .slider-text
      {
        width:30%;
        height:auto;
        margin-right:5rem;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-wrap:wrap;
        
      }
      .slider-text p
      {
        font-size:3rem;
      }
      .slider-text bottom
      {
        width:8rem;
        height:auto;
        margin-top:1rem;
        border:none;
        padding:0.5rem;
        border-radius:0.5rem;
        background:#76c38f;
        color:#ffffff;
        cursor:pointer;
        font-family:'Georgia',sans-serif;
        
      }
      .slider-btn-left, .slider-btn-center, .slider-btn-center-fixed, .sider-btn-middle, .slider-btn-right
      {
        width:auto;
        height:auto;
        border:none;
        margin:5rem;
        padding:0.5rem;
        border-radius:0.5rem;
        background:none;
        font-weight:bold;
        font-size:2rem;
        color:#ffffff;
        cursor:pointer;
        font-family:'Georgia', sans-serif;
        
        
        
      }
      .slider-btn-center-fixed
      {
        vesibility:hidden;
        
      }
      .slider-btn-right-fixed
      {
        vesibility:hidden;
        
      }
      .slider-btn-left:hover, .slider-btn-center:hover, .slider-btn-center-fixed:hover, .slider-btn-middle:hover, .slider-btn-right:hover, .slider-btn-right-fixed:hover
      {
        color:#76c38f;
        
      }
      .slider-text button:hover
      {
        background:#76a28e;
        
        
      }
      .slider-box-img
      {
        width:20%;
        height:auto;
        padding:0.5rem;
        margin-right:5rem;
        
      }
      .slider-img1
      {
        width: 23rem;
        height:23rem;
        border:1.5rem solid;
        border-color:rgba(0,0,0,0.8);
        border-radius:12rem;
        background-image:url(origjina.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
        
      }
      .slider-img2
      {
        width:23rem;
        height:23rem;
        border:1.5rem solid;
        border-color:rgba(0,0,0,0.8);
        border-radius:12rem;
        background-image:url(femijet.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
        
        
        
      }
      .slider-img3
      {
        width:23rem;
        height:23rem;
        border:1.5rem solid;
        border-color:rgba(0,0,0,0.8);
        border-radius:12rem;
        background-image:url(femijaipeste.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
        
        
      }
      .img-sepia
      {
        filter:sepia(5%);
        
      }
      .img-grayscale
      {
        fliter:grayscale(5%);
        
      }
      .services
      {
        width:80%;
        margin:auto;
        height:30rem;
        padding:4.5rem;
        display:flex;
        justify-content:space-between;
        align-items:center;
        
      }
      .services-box
      {
        width:20%;
        height:100%;
        color:#303030;
        background-image:url(yellowmoon.jpg);
        text-align:center;
        cursor:pointer;
      }
      .services-box:hover
      {
        color:#ffffff;
        background:#76c38f;
      }
      .services-box-icon
      {
        margin-top:2rem;
        font-size:4rem;
      }
      .services-box p
      {
        font-size:2rem;
        text-transform:uppercase;
      }
      .latestwork
      {
        text-align:center;
        width:80%;
        margin:auto;
        height:auto;
        
        
      }
      .latestwork-btn
      {
        width:25%;
        margin:auto;
        border:none;
        background:#303030;
        padding:1rem;
        border-radius:0.5rem;
        color:#ffffff;
        text-transform:uppercase;
        font-size:2rem;
        font-family:'Georgia',sans-serif;
        
        
      }
      .latestwork-btn::before, .latestwork-btn::after
      {
        content: '';
        position:absolute;
        width:26%;
        height:0.25rem;
        top:71.75rem;
        border-bottom:0.25rem solid #303030;
      }
      .latestwork-btn::before
      {
        left:14.25rem;
      }
      .latestwork-btn::after
      {
        right:14.25rem;
      }
      .latestwork-box-img
      {
        width:100%;
        margin:auto;
        height:auto;
        padding:2rem;
        display:flex;
        justify-content:space-around;
        align-items:center;
        flex-wrap:wrap;
        
        
      }
      .latestwork-img1
      {
        width:20rem;
        height:13rem;
        border:0.5rem solid #ffffff;
        margin:1rem;
        cursor:pointer;
        background-image:url(if.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        
        
        
      }
      .latestwork-img2
      {
        width:20rem;
        height:13rem;
        border:0.5rem solid #ffffff;
        margin:1rem;
        cursor:pointer;
        background-image:url(vices.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        
      }
      .latestwork-img3
      {
        width:20rem;
        height:13rem;
        border:0.5rem solid #ffffff;
        margin:1rem;
        cursor:pointer;
        background-image:url(theghost.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        
      }
      .latestwork-img4
      {
        width:20rem;
        height:13rem;
        border:0.5rem solid #ffffff;
        margin:1rem;
        cursor:pointer;
        background-image:url(zombies.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        
      }
      .latestwork-img5
      {
        width:20rem;
        height:13rem;
        border:0.5rem solid #ffffff;
        margin:1rem;
        cursor:pointer;
        background-image:url(endofworld.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        
      }
      .latestwork-img6
      {
        width:20rem;
        height:13rem;
        border:0.5rem solid #ffffff;
        margin:1rem;
        cursor:pointer;
        background-image:url(theseven.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        
      }
      .latestwork-img:hover
      {
        border-color:#76c38f;
        filter:grayscale(0);
      }
      .footer.box
      {
        width:100%;
        height:auto;
        background-color:rgba(0,0,0,0.7);
        color: #ffffff;
        
      }
      .footer
      {
        width:80%;
        margin:auto;
        padding:3rem;
        height:20rem;
        display:flex;
        justify-content:space-around;
        align-items:center;
        color:#d4d4d4;
        
      }
      .footer-inside-box
      {
        width:20%;
        height:20rem;
        margin-top:3rem;
        
      } 
      .footer-inside-box h4
      {
        color:#ffffff;
        font-weight:normal;
        
      }
      .footer-inside-box a
      {
        text-decoration:none;
        color:#76c38f;
        
      }
      .footer-inside-box a:hover
      {
        color:#76a28e;
        
      }
      .footer-inside-box ul
      {
        margin:0;
        padding:0;
        list-style-type:none;
      }
      .footer-inside-box ul li
      {
        margin-bottom:0.75rem;
        padding:0.1rem;
      }
      .footer-inside-box form input
      {
        width:100%;
        height:auto;
        padding:0.5rem;
        color:#c3c3c3;
        margin-bottom:0.5rem;
        border-color:#303030;
        border-radius:0.5rem;
        background-color:rgba(0,0,0,0.7);
      }
      .footer-inside-box form button
      {
        width:5rem;
        height:auto;
        margin-top:1rem;
        border:none;
        padding:0.5rem;
        border-radius:0.5rem;
        background:#76c38f;
        color:#000000;
        cursor:pointer;
        text-transform:uppercase;
        font-weight:bold;
        font-family:'Georgia',sans-serif;
        
      }
      .footer-inside-box form button:hover
      {
        background:#76a28e;
        
      }
       </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="jquery.scrollTo.min.js"></script>
    <script>
    $(document).ready(function(){
      $imgtext= $("<p>lorem ipsum dolar</p>");
      $imgtext.css({
        'background' : '#000000',
        'color' : '#ffffff',
        'margin-top' : '9.9em',
        'padding' : '0.5rem',
        'text-transform' : 'uppercase',
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
        
  </head>
        
