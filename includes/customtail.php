<?php if(isset($_POST["tailestimate"])) {
        $recipient="mushel@gmail.com";
        $subject="Custom Mermaid Tail Estimate Request!";
        $sender=$_POST["sender"];
        $senderEmail=$_POST["senderEmail"];
        
        $customtailSize=$_POST["customtailsize"];
        $customtailWaist=$_POST["customtailwaist"];
        $customtailMain=$_POST["customtailmain"];
        $customtailFin=$_POST["customtailfin"];
        $customtailFlowing=$_POST["customtailflowing"];
        
    
        $mailBody="Name: $sender\nEmail: $senderEmail\nhas ordered a custom tail\n\nSize: $customtailSize\nWaist: $customtailWaist\nMain Section: $customtailMain\ncustomtailFin: $customtailFin\nFlowing Fin: $customtailFlowing";
        
        mail(
            $recipient, $subject, $mailBody, "From: $sender <$senderEmail>" 
        );
    
        //$thankYou="<p>Thank You!!! Your estimate date and time was sent.</p>"; 
    }
?>
<!-- currently not working -->
    <form method="post" action="#">
                    <div class="input-field">
                        <select name="customtailsize">
                            <option disabled selected>Pick your size: </option>
                            <option>small</option>
                            <option>medium</option>
                            <option>large</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <select name="customtailwaist">
                        <option disabled selected>Pick elastic waist style:</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <select name="customtailmain">
                            <option disabled selected>Pick main body:</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <select name="customtailfin">
                            <option disabled selected>Pick fin & center:</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        
                    </div>
                    <div class="input-field">
                        <select name="customtailflowing">
                            <option disabled selected>Pick flowing fins:</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        
                    </div>
                    <div class="input-field">
                        <input id="full_name" type="text" class="validate" name="sender" required="">
                          <label for="full_name">Full Name</label>
                    </div>
                    <div class="input-field">
                        <input id="email" type="text" class="validate" name="senderEmail" required="">
                        <label for="email">Email</label>
                    </div>
                    
                    <button class="btn teal lighten-2" type="submit" name="tailestimate" value="tailestimate">Request Estimate
                      <i class="material-icons right">send</i>
                    </button>
                </form>