<!DOCTYPE html>
<html>
  <head>
    <title>Libra romance</title>
    <style type="text/css">
      {
        box-sizing:border-box;
      }
      body{
        margin:0;
        padding:0;
        font-family:'Georgia',sans-serif;
        background:#d4d4d4;
        overflow-x:hidden;
        background-color:black;
        background-repeat:repeat;
      }
      #div99{
        position:relative;
        left:900px;
        top:-980px;
      }
      .content-box{
        width:100%;
        height:100%;
        background-size:cover;
        background-repeat:no-repeat;
      }
      .baner-box{
        width:100%;
        height:40rem;
        background:#000000;
        background-color:rgba(0, 0, 0, 0.5);
      }
      .header{
        width:80%;
        margin:auto;
        height:8rem;
        padding:3rem;
        display:flex;
        justify-content:space-between;
        align-items:center;
        color:#ffffff;
      }
      .header-logo p {
        font-size:2rem;
        margin:0;
      }
      .header-logo small{
        color:#c3c3c3;
      }
      .header-nav ul{
        padding:0;
        margin:0;
        list-style-type:none;
        display:flex;
        justify-content:center;
        align-items:center;
      }
      .header-nav li {
        width:auto;
        height:auto;
        border-radius:0.5rem;
        margin:0.5rem;
        padding:0.5rem;
        text-align:center;
        text-transform:uppercase;
      }
      .header-nav li:hover{
        background:#76c38f;
      }
      .header-nav ul a{
        text-decoration:none;
        color:#ffffff;
      }
      .slider{
        width:100%;
        margin:auto;
        height:30rem;
        padding:3rem;
        color:#ffffff;
      }
      .slider-box, .slider-box-left, .slider-box-right{
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
      .slider-box-left{
        left:-100%;
      }
      .slider-box{
        left:0;
        right:0;
      }
      .slider-box-right{
        right:-100%;
      }
      .slider-text{
        width:30%;
        height:auto;
        margin-right:5rem;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-wrap:wrap;
      }
      .slider-text p {
        font-size:3rem;
      }
      .slider-text button{
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
      .slider-btn-left, .slider-btn-center, .slider-btn-center-fixed, .slider-btn-middle, .slider-btn-right{
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
      .slider-btn-center-fixed{
        visibility:hidden;
      }
      .slider-btn-right-fixed{
        visibility:hidden;
      }
      .slider-btn-left:hover, .slider-btn-center:hover, .slider-btn-center-fixed:hover, .slider-btn-middle:hover, .slider-btn-right:hover, .slider-btn-right-fixed:hover {
        color:#76c38f;
      }
      .slider-text button:hover{
        background:#76a28e;
      }
      .slider-box-img{
        width:20%;
        height:auto;
        padding:0.5rem;
        margin-right:5rem;
      }
      .slider-img1{
        width:23rem;
        height:23rem;
        border:1.5rem solid;
        border-color:white;
        border-radius:12rem;
        background-image: url(shtrattrendafilash.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
      }
      .slider-img2 {
        width:23rem;
        height:23rem;
        border:1.5rem solid;
        border-color:white;
        border-radius:12rem;
        background-image: url(tatianadhealeksandri.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
      }
      .slider-img3{
        width:23rem;
        height:23rem;
        border:1.5rem solid;
        border-color:white;
        border-radius:12rem;
        background-image:url(sicokollateehidhur.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
      }
      .img-sepia{
        filter:sepia(5%);
      }
      .img-grayscale{
        filter:grayscale(10%);
      }
      .services{
        width:80%;
        margin:auto;
        height:30rem;
        padding:4.5rem;
        display:flex;
        justify-content:space-between;
        align-items:center;
      }
      .services-box{
        width:20%;
        height:100%;
        color:#303030;
        background:#33E0FF;
        text-align:center;
        cursor:pointer;
        background-image:url(heheee.jpg);
      }
      .services-box:hover{
        color:#ffffff;
        background:#76c38f;
      }
      .services-box-icon{
        margin-top:2rem;
        font-size:4rem;
      }
      .services-box p {
        font-size:2rem;
        text-transform:uppercase;
      }
      .latestwork{
  text-align:center;
  width:80%;
  margin:auto;
  height:auto;
}
.latestwork-btn{
  width:25%;
  margin:auto;
  border:none;
  background:#303030;
  padding:1rem;
  border-radius:0.5rem;
  color:#ffffff;
  text-transform:uppercase;
  font-size:2rem;
  font-family:'Georgia', sans-serif;
}
.latestwork-btn::before, .latestwork-btn::after{
  content: '';
  position:absolute;
  width:26%;
  height:0.25rem;
  top:71.75rem;
  border-bottom:0.25rem solid #303030;
}
.latestwork-btn::before{
  left:14.25rem;
}
.latestwork-btn::after{
  right:14.25rem;
}
.latestwork-box-img{
  width:100%;
  margin:auto;
  height:auto;
  padding:2rem;
  display:flex;
  justify-content:space-around;
  align-items:center;
  flex-wrap:wrap;
}
.latestwork-img1{
  width:20rem;
  height:13rem;
  border:0.5rem solid #ffffff;
  margin:1rem;
  cursor:pointer;
  background-image:url(njekafenereretenxehte.jpg);
  background-size:cover;
  background-repeat:no-repeat;
}
.latestwork-img2{
  width:20rem;
  height:13rem;
  border:0.5rem solid #ffffff;
  margin:1rem;
  cursor:pointer;
  background-image:url(djaloshi.jpg);
  background-size:cover;
  background-repeat:no-repeat;
}
.latestwork-img3{
  width:20rem;
  height:13rem;
  border:0.5rem solid #ffffff;
  margin:1rem;
  cursor:pointer;
  background-image:url(efshehtaenjevere.jpg);
  background-size:cover;
  background-repeat:no-repeat;
}
.latestwork-img4{
  width:20rem;
  height:13rem;
  border:0.5rem solid #ffffff;
  margin:1rem;
  cursor:pointer;
  background-image:url(marmarahanem.jpg);
  background-size:cover;
  background-repeat:no-repeat;
}
.latestwork-img5{
  width:20rem;
  height:13rem;
  border:0.5rem solid #ffffff;
  margin:1rem;
  cursor:pointer;
  background-image:url(nataegjate.jpg);
  background-size:cover;
  background-repeat:no-repeat;
}
.latestwork-img6{
  width:20rem;
  height:13rem;
  border:0.5rem solid #ffffff;
  margin:1rem;
  cursor:pointer;
  background-image:url(pegasus.jpg);
  background-size:cover;
  background-repeat:no-repeat;
}
.latestwork-img:hover{
  border-color:#76c38f;
  filter:grayscale(0);
}
.footer-box{
  width:100%;
  height:auto;
  background-color:rgba(0, 0, 0, 0.7);
  color: #ffffff;
}
      .footer-box{
        width:100%;
        height:auto;
        background-color:rgba(0, 0, 0, 0.7);
        color:#ffffff;
      }
      .footer{
        width:80%;
        margin:auto;
        padding:3rem;
        height:20rem;
        display:flex;
        justify-content:space-around;
        align-items:center;
        color:#d4d4d4;
      }
      .footer-inside-box{
        width:20%;
        height:20rem;
        margin-top:3rem;
      }
      .footer-inside-box h4{
        color:#ffffff;
        font-weight:normal;
      }
      .footer-inside-box a {
        text-decoration: none;
        color:#76c38f;
      }
      .footer-inside-box a:hover{
        color:#76a28e;
      }
      .footer-inside-box ul{
        margin:0;
        padding:0;
        list-style-type:none;
      }
      .footer-inside-box ul li {
        margin-bottom:0.75rem;
        padding:0.1rem;
      }
      .footer-inside-box form input {
        width:100%;
        height:auto;
        padding:0.5rem;
        color:#c3c3c3;
        margin-bottom:0.5rem;
        border-color:#303030;
        border-radius:0.5rem;
        background-color:rgba(0, 0, 0, 0.7);
      }
      .footer-inside-box form button{
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
        font-family:'Georgia', sans-serif;
      }
      .footer-inside-box form button:hover{
        background:#76a28e;
      }
      .content-table{
        border-collapse:collapse;
        margin:25px 0;
        font-size:0.9rem;
        min-width:400px;
        border-radius:5px 5px 0 0;
        overflow:hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }
      .content-table thead tr{
        background-color:#009879;
        color:#ffffff;
        text-align:left;
        font-weight:bold;
      }
      .content-table th,
      .content-table td{
        padding:12px 15px;
      }
      .content-table tbody tr{
        border-bottom:1px solid #dddddd;
      }
      .content-table tbody tr:nth-of-type(even){
        background-color:#f3f3f3;
      }
      .content-table tbody tr:last-of-type{
        border-bottom:2px solid #009879;
      }
      .content-table tbody tr.active-row{
        font-weight:bold;
        color:#009879;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></scripts>
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
        $('.latestwork-img').hover(function(){
          $(this).append($imgtext);
        });
        // left slide button
        $('.slider-btn-center').click(function(){
          $('.slider-box-left').animate({left:'-100%'});
          $('.slider-box').animate({right:'0'});
        });
        // left slide button mobile
        $('.slider-btn-center-fixed').click(function(){
          $('.slider-box-left').animate({left:'-100%'});
          $('.slider-box').animate({right:'0'});
        });
        // center slide button
        $('.slider-btn-left').click(function(){
          $('.slider-box').animate({right:'-200%'});
          $('.slider-box-left').animate({left:'0'});
        });
        $('.slider-btn-right').click(function(){
          $('.slider-box').animate({left:'-200%'});
          $('.slider-box-right').animate({right:'0'});
        });
        //mobile fixed
        $('.slider-btn-right-fixed').click(function(){
          $('.slider-box').animate({left:'-200%'});
          $('.slider-box-right').animate({right:'0'});
        });
        // right slide button
        $('.slider-btn-middle').click(function(){
          $('.slider-box').animate({left:'0%'});
          $('.slider-box-right').animate({right:'-100%'});
        });
      });
    </script>
  </head>
    
      
      
      
      
        
        
    
      
      
