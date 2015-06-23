    <?php require('includes/header.php') ?>

    <section class="page-title">
      <div class="container"><h1>Noticias</h1></div>
    </section>

    <div class="container">
      <div class="row news">
        

        <?php
        global $post;
        $args = array( 'posts_per_page' => 3, 'category'=>1  );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) :  setup_postdata($post); ?>
        
        <div class="col-xs-6 col-md-4 news-post">
          <div class="departments"><?php the_title(); ?></div>
          <div class="news-date"><?php the_time('j \d\e F \d\e Y') ?></div>
          <div class="wrapper">
            <div class="pic"><?php the_post_thumbnail(); ?></div>
          </div>
          <p><?php echo substr(get_the_excerpt(), 0,200); ?>...<a href=" <?php echo get_permalink(); ?> " target="_blank">Leer más</a></p>
          <div class="cats">Posted in <a href="#"> <?php the_category(', ') ?></a>, por <?php the_author(); ?> | Tags: <a href="#" rel="tag"><?php the_tags(', ') ?></a></div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>



    <!-- Footer Partial -->
    <?php require('includes/footer.php') ?>