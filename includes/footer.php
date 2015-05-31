
<!--Footer-->
<div class="footer">

      <div class="container">
        <div class="row page-footer">
          <div class="col-sm-4 col-md-4 twitter">
          <div class="widget-icon"></div>
            <h3 class="widget-title">Twitter Posts</h3>
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit, consectetur adipiscing.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit, consectetur adipiscing.</li>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit, consectetur adipiscing.</li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-4 location">
            <div class="widget-icon"></div>
            <h3 class="widget-title">Ubicación</h3>
 
            <ul class="list-unstyled">
              <li><i class="fa fa-hospital-o"></i><address>Torre de Consultorios El Golf <br>Av. Aurelio Miró Quesada 1048 Consultorio 301 <br> San Isidro, Lima - Perú.</address></li>
              <li><i class="fa fa-hospital-o"></i><address>Clínica Vesalio <br> Calle Joseph Thompson (ex Calle Uno) Nº 140 <br> Urb. Santo Tomás San Borja</address></li>
              <li><i class="fa fa-phone"></i>Tel: (01)264-2244 Anexo 710 / 618-9999 Anexo 241<br>Celular: 979405999 / 98259753</li>
              <!-- <li><i class="fa fa-at"></i>informacion@obesidad.com</li>
                   <li><i class="fa fa-skype"></i>Medical Skype Name</li> -->
            </ul>
          </div>
          <div class="col-sm-4 col-md-4 recent-posts">
            <div class="widget-icon"></div>
            <h3 class="widget-title">Noticias</h3>
            <ul class="list-unstyled">
              <?php
              global $post;
              $args = array( 'posts_per_page' => 3 );
              $myposts = get_posts( $args );
              foreach( $myposts as $post ) :  setup_postdata($post); ?> 
                <li>
                  <a href=" <?php echo get_permalink(); ?> " ><img src="/images/news_footer1.png"></a>
                  <p>
                    <?php echo substr(get_the_excerpt(), 0,60); ?>...<br><a href=" <?php echo get_permalink(); ?> " target="_blank">Leer más</a><br>
                    <?php the_time('j \d\e F \d\e Y') ?>
                  </p>
                </li>
              <?php endforeach; ?>

            </ul>
          </div>
        </div>
      </div>
        
    </div>



     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script type="text/javascript" src="scripts/navbar.js"></script>
    <script type="text/javascript" src="scripts/form.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
          $('.map').bind('click',function () {
              $('iframe').css("pointer-events", "auto");
          });
          
          $('.map').bind('mouseleave',function() {
            $('iframe').css("pointer-events", "none"); 
          });
       });                  
    </script>

       

        <!-- build:js({app,.tmp}) scripts/main.js -->
        <script src="scripts/main.js"></script>
        <!-- endbuild -->
</body>
</html>
