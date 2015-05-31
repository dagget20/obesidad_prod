    <?php require('includes/header.php') ?>

    
    <title>Obesidad - </title>

    <div class="container">
      

      <!-- Carousel  -->

      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="row">
          <div class="carousel-inner"  role="listbox">
            <div class="item active">
              <img src="images/medical-slide-3.jpg">
            </div>
            <div class="item">
              <img src="images/medical-slide-2.jpg">
            </div>
            <div class="item">
              <img src="images/medical-slide-1.jpg">
            </div>
          </div>
        </div>
   
      </div>

      <!-- Menu de servicio -->

      <div class="row">
            <ul class="list-unstyled text-center main-services">
              <li class="col-sm-6 col-md-3">
                <div class="pic">
                  <a href="/tecnicas.php"><i class="fa fa-medkit"></i></a>
                </div>
                <div class="text">
                  <a href="/tecnicas.php"><h2>Balón Intragástrico</h2></a>
                  <p>Es un efectivo tratamiento temporal del sobrepeso, que se coloca en el interior del estomago </p>
                </div>
              </li>
              <li class="col-sm-6 col-md-3">
                <div class="pic">
                  <a href="/tecnicas.php"><i class="fa fa-user-md"></i></a>
                </div>
                <div class="text">
                  <a href="tecnicas.php"><h2>Banda Gástrica Ajustable</h2></a>
                  <p>Es una banda inflable que se coloca alrededor del estómago, limitando la cantidad de alimentos</p>
                </div>
              </li>
              <li class="col-sm-6 col-md-3">
                <div class="pic">
                  <a href="tecnicas.php"><i class="fa fa-stethoscope"></i></a>
                </div>
                <div class="text">
                  <a href="tecnicas.php"><h2>Gastrectomía Vertical</h2></a>
                  <p>Este procedimiento consiste en cortar verticalmente el estomago, disminuyendo su capacidad</p>
                </div>
              </li>
              <li class="col-sm-6 col-md-3">
                <div class="pic">
                  <a href="tecnicas.php"><i class="fa fa-sign-out"></i></a>
                </div>
                <div class="text">
                  <a href="tecnicas.php"><h2>Bypass Gástrico</h2></a>
                  <p>Aliquam ut lorem scelerisque, consequat mi quis, scelerisque massa.</p>
                </div>
              </li>
            </ul>
      </div>

      <!-- Body  -->

      <div class="row main-section">

        <?php
        global $post;
        $args = array( 'posts_per_page' => 4 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) :  setup_postdata($post); ?> 
          <div class="col-sm-6 news">
            <i class="fa fa-newspaper-o"></i>
            <div class="departments"><h3><?php the_title(); ?></h3></div>
            <p><?php echo substr(get_the_excerpt(), 0,100); ?>...<a href=" <?php echo get_permalink(); ?> " target="_blank">Leer más</a></p>
          </div>
        <?php endforeach; ?>

      </div>

      

      <!-- Servicios / Tratamientos / Contacto -->

      <div class="row main-section">
        <div class="col-md-4"> 
          <!--Tecnicas QX Partial-->
          <?php require('includes/techniques.php') ?>
        </div>

        <div class="col-md-4"> 
          <!--Tratamientos Partial-->
          <?php require('includes/treatments.php') ?>  
        </div>

        <div class="col-md-4 appointment">
          <div class="departments"> Contactanos</div> 
          
            <!--Form Partial-->
            <?php require('includes/form_partial.php') ?>

          
        </div>
      </div>

    </div>

    <!-- Footer -->
    <?php require('includes/footer.php') ?>