<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
    <?php wp_head();?>
</head>
<body>
    <!-- header part start -->
    <header class="container-fluid slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
    $x = 0;
    while(have_posts()){the_post();
        $x++;


      ?>

    <div class="carousel-item <?=($x==1)? 'active' : '' ?>">
    <?php the_post_thumbnail(); ?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <?php }?>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>

    <!-- header part end -->

    <!-- logo part start -->
     <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6">
                <?php dynamic_sidebar('bdlogo');?>
            </div>

        </div>
    
     </section>

    <!-- logo part end -->

    <!-- menu part star -->
    <section class="container-fluid navbar-expand navbar-light bg-light menu">
      <div class="container">
        <?php
        wp_nav_menu([
          'theme_location'=>'PM',
          'menu_class'=>'navbar-nav'
        ]);
        ?>
      </div>
    </section>
    <!-- menu part end -->
    <!-- hero part start -->
    <section class="container text-center mt-5 hero">
    <div class="row">
      <?php dynamic_sidebar('herotitle')?>
    </div>
    <div class="row">
      <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
      <?php dynamic_sidebar('herocard1')?>
    </div>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4"></div>
    </div>
    </section>
   
    <!-- hero part end -->






<?php wp_footer();?>
    
</body>
</html>