</main>  
<footer class="page-footer" id="one">
    <div class="container">
      <div class="row">
        <div class="col l7 s12">
          
          <p class="grey-text text-lighten-4">Creatively conceived costume items for all kinds of occations. More than just mermaid tails, playa coats, and pasties. Jennifer has a two degrees from the Fashion Institute of Technoly in Fabric Design and Accessories along with a background in the halloween and costume industry that spans well over a decade. Her studio is a industrial machine sewing powerhouse which houses an array of sequence, glitter, fur, rainbow, and many other fabrics that will blow your mind.</p>
        </div>
        <div class="col l2 m5 s12">
          
          <ul>
            <li><a class="bluu-text" href="#two">Contact</a></li>
            <li><a class="teal-text" href="#one">About</a></li>
            <li><a class="purp-text" href="tails.php">Mermaid Tails</a></li>
            <li><a class="pynk-text" href="coats.php">Playa Coats</a></li>
            <li><a class="gold-text" href="pasties.php">Pasties</a></li>
          </ul>
        </div>
        <div class="col l3 m7 s12">
        <h5 class="white-text">Follow Costumegasm</h5>
          <ul>
            <li><a href="https://www.facebook.com/costumegasm/" title="Costumegasm on Facebook" target="_blank"><i class="fab fa-facebook-square"></i><a></li>
            <li><a href="https://www.instagram.com/costumegasm/" title="Costumegasm on Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/costumegasm?lang=en" title="Costumegasm on Twitter" target="_blank"><i class="fab fa-twitter-square"></i></a>
            <li>Made in Queens, New York</li>
            <li>123.456.7890</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col s12">
            Made by <a class="teal-text text-darken-2" href="http://mcurrier.com">m. currier designs</a>

          </div>
        </div>     
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript" src="js/jquery.lazy.min.js"></script>  
  <script>
    $('.lazy').Lazy({
        // your configuration goes here
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: true,
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        }
    });
    $('.carousel.carousel-slider').carousel({
        fullWidth: true
    });
    var autoplay = true;
    setInterval(function() { if(autoplay) $('.carousel.carousel-slider').carousel('next'); }, 4500);
        $('.carousel.carousel-slider').hover(function(){ autoplay = false;},function(){ autoplay = true; 
    });

    $(document).ready(function(){
        $('.materialboxed').materialbox();

        $('select').formSelect();
    
        $('.tabs').tabs();
    
        $('.datepicker').datepicker();
    });

    
         
    </script>
  
  </body>
</html>