<?php if(isset($_POST["submit1"])) {

$to = "mushel@gmail.com";
$subject = "Message From Costumegasm";
$email = $_POST["email"];
$name = $_POST["name"];
$msg = $_POST["msg"];

$headers = "From: costumegasm@gmail.com";
$mailBody="Name: $name\nEmail: $email\n\n$msg";

mail($to,$subject,$mailBody,$headers);
$thankYou="Your message has been sent.";
}

?>
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
                <button class="btn waves-effect waves-light wine" type="submit" name="submit1" value="submit">Submit
                </button>    
              </div> 
                               
          </div>
        </form> 