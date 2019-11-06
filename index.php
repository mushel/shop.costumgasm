<?php if(isset($_POST["submit"])) {

  $to = "mushel@gmail.com";
  $subject = "Contact at Costumegasm Shop";
  $email = $_POST["email"];
  $name = $_POST["name"];
  $msg = $_POST["msg"];
  
  $headers = "From: costumegasm@gmail.com";
  $mailBody="Name: $name\nEmail: $email\n\n$msg";
  
  mail($to,$subject,$mailBody,$headers);
  $thankYou="Your message has been sent to Costumegasm headquarters.";
  }
  
  ?>

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
  <script src="https://kit.fontawesome.com/14d2235864.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#one">One Link</a></li>
        <li><a href="#two">Contact</a></li>
        <li><a href="slider.html">Slider</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#one">One Link</a></li>
        <li><a href="#two">Contact</a></li>
        <li><a href="slider.html">Slider</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

    <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src="img/mermaid7.jpg"></a>
        <a class="carousel-item" href="#two!"><img src="img/mermaid2.jpg"></a>
        <a class="carousel-item" href="#three!"><img src="img/mermaid5.jpg"></a>
        <a class="carousel-item" href="#four!"><img src="img/costumegasmcard.jpg"></a>
    </div>
    <div class="container" id="one">
        <div class="row">
            <div class="col s4 center">
                <h4 class="purp-text">Mermaid Tails</h4>
                <i class="material-icons big bluu-text">pool</i>
                <p class="left-align">
                  Mermaid Tails are made by hand at Costumegasm headquarters. They are 100% swim-proof. Comprized of at least three different fabrics including two-way sequin scales. All the inner seams are bound with japanese elastic for comfort. Wide elastic and a high-waist keep everything in place. They are designed to fit Fin Fun Monofins for maximum mer time. Side fins and monofin extensions add beauty and flow creating graceful under water swim time. Use the mermaid measurments chart to send your sizing.
                </p>
            </div>
            <div class="col s4 center">
                <h4 class="gold-text">Custom Fur Coats</h4>
                <i class="material-icons big gree-text">palette</i>
                <p class="left-align">
                  Custom playa coats made to order at any length will keep you warm and looking sharp. Fur lining is available for extra coziness. Options for pockets, detachable hoods, and lighting. Pick from an array of fur or fabric to create a one of a kind coat. Turn around is about a month and cuttoff date is june 21st. Use the coat measurments chart to send your sizing.
                </p>
            </div>
            <div class="col s4 center">
                <h4 class="pynk-text">Pasties</h4>
                <i class="material-icons big purp-text">favorite</i>
                <p class="left-align">
                  Easy to use peal and stick pasties available in a array of styles. Great for nipple coverage as a nice accent to any costume. Inquire about bulk rates for orders over 12 pairs.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
      <hr>
    </div>
    <div class="container" id="two">
      <div class="row">
        <div class="col">
          <h1>Drop me a message here...</h1>
        </div>
      </div>
      <form action="#" id="form" method="post">
        <div class="row">
        
        </div>
        <div class="row">
           
              <div class="input-field col m6 s12">
                  <input name="name" type="text" class="validate">
                  <label for="name">Full Name</label>
              </div>
              <div class="input-field col m6 s12">
                  <input name="email" type="email" class="validate">
                  <label for="email">Email</label>   
              </div>
          </div>
          <div class="row">
              <div class="input-field col m9 s12">
                <textarea name="msg" class="materialize-textarea"></textarea>
                <label for="msg">Message</label>
                <?=$thankYou?>
              </div>
              <div class="input-field col m3 s12">
                <button class="btn waves-effect waves-light wine" type="submit" name="submit" value="submit" id="send">Submit
                </button>    
              </div> 
                               
          </div>
        </form> 
    </div>
<?php include('includes/footer.php'); ?>
    