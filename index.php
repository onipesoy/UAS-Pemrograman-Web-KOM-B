<?php
  session_start();
  include "koneksi.php";
  if(!isset($_SESSION['username'])){
    header ("location:login.php");
  }

  if(!isset($_SESSION['username'])){
    $username=$_SESSION['username'];
  }
?>



<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>MCR</title>
    <link rel="icon" href="mcrlogo.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="uts.js"></script>
</head>

 <body>

     <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
      <img src="mcrlogo2.png" width="50" height="50" class="d-inline-block align-top" alt="">
      MY CHEMICAL ROMANCE
      </a>
     </nav>  

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">

      <li class="nav-item";
        <a class="nav-link" href="aksi_logout.php" >logout</a?>
      </li>
    </ul>
  </div>

     
     

     <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="mcr_1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="mcr_2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
     </div>

     <div class="container"></div>
     <div class="card mt-5 mb-5" style="width: 18rem;">
        <img src="mcr_4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Short Profile</h5>
          <p class="card-text">My Chemical Romance (commonly acronymized to MCR or abbreviated to My Chem) is an American rock band from Newark, New Jersey.</p>
        </div>
     </div>
    </div>

     <table class="table table-striped">
         <thead>
             <tr>
                 <th>NO</th>
                 <th>NAMA</th>
                 <th>POSISI</th>
                 <th>UMUR</th>
             </tr>
         </thead>
         <tbody>
             <tr>
                 <td>1</td>
                 <td>Gerard Way</td>
                 <td>Vokalis</td>
                 <td>44</td>
             </tr>
             <tr>
                <td>2</td>
                <td>Ray Toro</td>
                <td>Gitaris</td>
                <td>43</td>
             </tr>
             <tr>
                 <td>3</td>
                 <td>Mickey Way</td>
                 <td>Basis</td>
                 <td>40</td>
             </tr>
             <tr>
                 <td>4</td>
                 <td>Frank Iero</td>
                 <td>Gitaris</td>
                 <td>39</td>
             </tr>
         </tbody>
     </table>

     <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pyi0ZfuIIvo" allowfullscreen></iframe>
    </div>

      

    <footer class="text-center">
        <a href="https://www.wikipedia.org/wiki/My_Chemical_Romance">
        <img src="mcrlogo.png" alt="" >
        </a>

    </footer>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 </body>
</html>