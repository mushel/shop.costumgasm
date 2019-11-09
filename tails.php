<?php include('includes/header.php'); ?>
<div class="row">
  <br>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Mermaid Tails</h1>
        </div>
    </div>
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a class="active" href="#test1">Ready to Swim</a></li>
          <li class="tab col s3"><a href="#test2">Rentals</a></li>
          <li class="tab col s3"><a href="#test3">Custom Orders</a></li>         
        </ul>
      </div>


        
        <div id="test1" class="col s12">
          <div class="row">
            <div class="col s12 m8">
                <div class="row">
                  <div class="col">
                    <h4>Swim Ready Mermaid Tails</h4>
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
                
            </div>
            <div class="col s12 m4">
                <p>Each tail is handcrafted by Jennifer Taves at Costumegasm Studio. These come in a few different colors and sizes. Turnaround time is two and half weeks.</p>
                <br>
                <?php include('includes/swim.php'); ?>
            </div>  
          </div>
        </div>
        <div id="test2" class="col s12">
        <div class="row">
            <div class="col s12 m8">
                <div class="row">
                  <div class="col">
                    <h4>Rentals</h4>
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
            </div>
            <div class="col s12 m4">
                <p>Are you ready to take your pool party to the next level. Renting a few mermaid tails is a sure fire way to get you there. Pick out the date for your next mermaid party and we can let you know if they are available.</p>
                <br>
                <form>
                    <div class="input-field">
                        <select name="rental-amount">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <label>
                            Choose your amount:    
                        </label>
                    </div>  
                    <br>  
                        <label>
                            Pick your size:    
                        </label>
                        <br>
                        <label>
                          <input type="checkbox" class="filled-in" for="rental-small" name="rental-small"/>
                          <span>small</span>
                        </label>
                        <br>
                        <label>
                          <input type="checkbox" class="filled-in" checked="checked" for="rental-medium" name="rental-medium"/>
                          <span>medium</span>
                        </label>
                        <br>
                        <label>
                          <input type="checkbox" class="filled-in" for="rental-large" name="rental-medium"/>
                          <span>large</span>
                        </label>
                    <br>
                    <br>                
                    <div class="input-field">
                        <label>
                            Pick the date:    
                        </label>
                      <input type="text" class="datepicker">
                    </div>
                </form>
            </div>
        </div>

        </div>
        <div id="test3" class="col s12">
          <div class="row">
            <div class="col s12 m8">
                <div class="row">
                  <div class="col">
                    <h4>Custom Tails</h4>
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
                
            </div>
            <div class="col s12 m4">
                <p>Each tail is handcrafted to order. Turnaround is six weeks. Choose from an assortment of color and sequence options.</p>
                <br>
                <?php include('includes/customtail.php'); ?>
            </div>
          </div>
        </div>
          
    </div>
</div>

  
<?php include('includes/footer.php'); ?>