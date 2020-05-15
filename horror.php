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
