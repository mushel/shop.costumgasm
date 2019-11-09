<?php if(isset($_POST["swim"])) {

$to = "mushel@gmail.com";
$subject = "Mermaid Tail";
$email = $_POST["email"];
$name = $_POST["name"];
$swimsize = $_POST["swimsize"];
$swimcolor = $_POST["swimcolor"];

$headers = "From: costumegasm@gmail.com";
$mailBody="Name: $name\nEmail: $email\n They are requesting a tail here are the details.\n size: $swimsize \n color: $swimcolor";

mail($to,$subject,$mailBody,$headers);
$thankYou="Your message has been sent.";
}

?>

                <form method="post" action="#">
                    <div class="input-field">
                        <select name="swimsize">
                            <option disabled selected>Pick your size: </option>
                            <option>small</option>
                            <option>medium</option>
                            <option>large</option>
                        </select>
                        <label>
                            Pick your size:    
                        </label>
                    </div>
                    <br><br>
                    <div class="input-field">
                        <select name="swimcolor">
                            <option disabled selected>Pick your color: </option>
                            <option>Purple/Turquoise</option>
                            <option>Gold/Black/Bronze</option>
                            <option>Pink/Purple</option>
                        </select>
                        <label>
                            What color do you want:    
                        </label>
                    </div>
                    <div class="input-field">
                        <input name="name" type="text" class="validate">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="input-field">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>   
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="swim" value="swim">Submit
                </button>  
                </form>