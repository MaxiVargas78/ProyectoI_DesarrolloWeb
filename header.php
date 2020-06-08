<?php

  session_start();

?> 




<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css" />
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
  <a class="navbar-brand bg-dark text-white" href="/index.php">
    <img src="https://images.vexels.com/media/users/3/142890/isolated/lists/4ea2d7c4bf3cad23a4f18ee58752deb8-anillos-de-alta-tecnologia-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    InfoMax
  </a>
  <div class="collapse navbar-collapse mr-sm-2" id="navbarNav">
    <ul class="navbar-nav mr-sm-2">
      <li class="nav-item my-2 my-sm-0">
        <a class="nav-link" href="/login.php">Iniciar Sesión<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item my-2 my-sm-0">
        <a class="nav-link" href="/somos.php">Quienes Somos</a>
      </li>
      </ul>
      </div>
      <div>
      <ul class="nav justify-content-end  text-white pull-xs-right">
     <li class="nav-item">
      <?php
      if(isset($_SESSION['usuario'])){
        echo "<a>".$_SESSION['usuario']."<a>";
      }  
        else{}
        ?>
        <a class="navbar-brand" href="/carritocompra.php">
        <img src="https://cdn3.iconfinder.com/data/icons/e-commerce-2-2/380/2-512.png"  width="40" height="40" class="d-inline-block align-top" alt="">
        </a>
      </ul>
  </div>
</nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Slide.jpg" height="524" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/Slide1.jpg" height="524" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/Slide2.jpg" height="524" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

