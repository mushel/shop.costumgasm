<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Shop at Costumegasm</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link href="https://fonts.googleapis.com/css?family=Nunito|Pacifico&display=swap" rel="stylesheet">

</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#one">One Link</a></li>
        <li><a href="slider.html">Slider</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#one">One Link</a></li>
        <li><a href="slider.html">Slider</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Mermaid Tails</h1>
        </div>
    </div>
</div>




    <div class="container">
        <div class="row">
            <div class="col s8">
                <div class="row">
                  <div class="col">
                    <h4>This is an item</h4>
                    <img class="materialboxed responsive-img" src="img/costumegasmcard.jpg">
                  </div>  
                </div>  
                <div class="row thumbnails"> 
                  <div class="col">
                      <img class="materialboxed responsive-img col s4" width="650" src="http://lorempixel.com/output/cats-q-c-490-410-4.jpg">
                
                      <img class="materialboxed responsive-img col s4" width="650" src="http://lorempixel.com/output/cats-q-c-490-410-5.jpg">
                      
                      <img class="materialboxed responsive-img col s4" width="650" src="http://lorempixel.com/output/nature-q-c-490-410-10.jpg">
                  </div>
                  
                </div>
                <a href="http://lorempixel.com/">random images</a>
            </div>
            <div class="col s4">
                <p>there's some info about the item here</p>
                <br>
                <form>
                    <div class="input-field">
                        <select>
                            <option>small</option>
                            <option>medium</option>
                            <option>large</option>
                        </select>
                        <label>
                            Pick your size:    
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>