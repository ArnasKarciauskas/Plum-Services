<!DOCTYPE html>
<html>
<head>
 <title>Cards</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>$(document).ready(function () {
    $('div.card').fadeIn(1000).removeClass('card');
});</script>
<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
 display: block;
 margin-left: auto;
 margin-right: auto;
 width: 50%;

}

.card{
     width: 65%;
     display:inline-block;
     display: none;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px;
     margin: 2%;



    }

.image img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 5px;
  width: 50%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;





 }

.title{

  text-align: center;
  padding: 10px;

 }

h1{
  font-size: 15px;
 }

.des{
  padding: 3px;
  text-align: center;
  font-size: 10px;
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

</style>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/p.jpg" width="30" height="30" alt=""> Plumservice</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="login.html">login</a></li>
          <li><a href="signup.html">signup</a></li>
        </ul>

      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
<div class="main">

 <!--cards -->
<div class="container-fluid">
  <div class="row">
    <!--<div class="col-md-4">-->
    <div class="col-sm-4">
<div class="card">

<div class="image">
   <img src="img/Webdev.png" alt="web services">
</div>
<div class="title">
 <h1>
Web services</h1>
</div>
<div class="des">
 <p>
Need a website? Look no further..</p>
<button>See more</button>
</div>
</div>
</div>


<!--cards -->
<!--<div class="col-md-4">-->
<div class="col-sm-4">
<div class="card">

<div class="image">
   <img src="img/SEO.png" alt="SEO">
</div>
<div class="title">
 <h1>
Internet Marketing</h1>
</div>
<div class="des">
 <p>
Social Media marketing, SEO, etc..</p>
<button>See more</button>
</div>
</div>
</div>
<!--cards -->
<!--<div class="col-md-4">-->
<div class="col-sm-4">
<div class="card">

<div class="image">
   <img src="img/language.png" alt="Translation">
</div>
<div class="title">
 <h1>
Data input & Translation</h1>
</div>
<div class="des">
 <p>
Need a document transcribed? Video translated?</p>
<button>See more</button>
</div>
</div>
</div>
</div>
</div>
<!--cards -->
<div class="container-fluid">
  <div class="row">
    <!--<div class="col-md-4">-->
    <div class="col-sm-4">
      <div class="card">

<div class="image">
   <img src="img/vid.png" alt="VIDEO">
</div>
<div class="title">
 <h1>
Photo & Video</h1>
</div>
<div class="des">
 <p>
Request a video, take professional photos for your business..</p>
<button>See more</button>
</div>
</div>
</div>

<!--cards -->
<!--<div class="col-md-4">-->
<div class="col-sm-4">
<div class="card">

<div class="image">
   <img src="img/car.png" alt="Mechanic">
</div>
<div class="title">
 <h1>
Car Mechanic</h1>
</div>
<div class="des">
 <p>
Mechanic comes to you! Best local prices for quick fixes on your car.</p>
<button>See more</button>
</div>
</div>
</div>
<!--cards -->
<!--<div class="col-md-4">-->
<div class="col-sm-4">
<div class="card">

<div class="image">
   <img src="img/handyman.png" alt="Handy-man">
</div>
<div class="title">
 <h1>
Handy Man</h1>
</div>
<div class="des">
 <p>
Plumbing? Painting? Moving? Local handy man services...</p>
<button>See more</button>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
