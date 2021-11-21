<?php
/* 
  Template Name: Página Inicial
 */
 get_header();
?>


<main>

<section class="slide-show">
    <a href="" class="prev">
    <svg  class="w-100" version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1280 1024" style="enable-background:new 0 0 1280 1024;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#91AD44;}
	.st1{fill:#FFFFFF;}
</style>


<g>
	<path class="st0" d="M518.3,691.8H339.7c-47.1,0-85.2-38.1-85.2-85.2V428c0-47.1,38.1-85.2,85.2-85.2h178.6
		c47.1,0,85.2,38.1,85.2,85.2v178.6C603.5,653.6,565.4,691.8,518.3,691.8z"/>
	<polygon class="st1" points="486.2,426.5 395.5,517.3 486.2,608 474.4,619.9 371.8,517.3 474.4,414.7 	"/>
</g>
</svg>
    </a>
    <a href="" class="next">
    <svg  class="w-100" version="1.1" id="Camada_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1280 1024" style="enable-background:new 0 0 1280 1024;" xml:space="preserve">
        <style type="text/css">
            .st0{fill:#91AD44;}
            .st1{fill:#FFFFFF;}
        </style>
        <g>
            <path class="st0" d="M825.2,691.8h178.6c47.1,0,85.2-38.1,85.2-85.2V428c0-47.1-38.1-85.2-85.2-85.2H825.2
                c-47.1,0-85.2,38.1-85.2,85.2v178.6C740,653.6,778.2,691.8,825.2,691.8z"/>
            <polygon class="st1" points="857.3,426.5 948.1,517.3 857.3,608 869.1,619.9 971.7,517.3 869.1,414.7 	"/>
        </g>

</svg>
    </a>
  <div class="slider-inner">
  <?php 
  $the_query = new WP_Query(array(
    'post_type' => 'banners',
    'posts_per_page' => -1
  ));
  if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
      $the_query->the_post();
      ?>
      <div class="slide-item d-flex align-items-center">

        <h1 >
          <?php the_content();?>
        </h1>
        <img class="img-banner" style="width: 100%; object-fit: cover" src="<?php the_post_thumbnail_url();?>" alt="">
      </div>
      <?php
    }
  }
  ?>
  </div>

</section>
<section id="sobre">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="row h-100">
                <div class="p-dif">
                    <h1 class="color-secondary titulo-section mt-3 mb-5">Sobre Nós</h1>
                    <p class="font-1-5rem">
                        <?php echo get_the_content();?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="row flex-column">
                <div>
                    <img class="img-sobre" src="<?php assets(); ?>/img/imagem_01.png" alt="" >
                </div>
                <div>
                    <img class="img-sobre" src="<?php assets(); ?>/img/imagem_02.png" alt="" >
                </div>
            </div>
        </div>
    </div>
</section>
<section id="servicos">
    <div class="container">
        <div class="py-3">
            <h1 class="titulo-section color-primary text-center mt-3 mb-5">
                Serviços
            </h1>

            <div class="row justify-content-around">
                <a class="col-md-6 col-sm-12 text-decoration-none" href="http://">
                    <div class="card-servico mx-auto" style="background-image: url('<?php assets(); ?>/img/construction-site-of-new-house.jpg');background-repeat: no-repeat; background-position: center;background-size: cover;">
                        <img src="<?php assets(); ?>/img/iconeConstrucao.svg" class="icone-servico" alt="" srcset="">
                        <h2 class="color-white">Construção</h2>
                    </div>
                </a>
                <a class="col-md-6 col-sm-12 text-decoration-none" href="http://">

                    <div class="card-servico mx-auto" style="background-image: url('<?php assets(); ?>/img/modern-house-with-sky.jpg');background-repeat: no-repeat; background-position: center;background-size: cover;">
                        <img src="<?php assets(); ?>/img/iconeReforma.svg"  class="icone-servico" alt="" srcset="">

                        <h2 class="color-white">Reforma</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="d-flex my-3">
            <a class="btn btn-lg  btn-outline-success mx-auto" href="#"> Ver Mais </a>
        </div>
 
    </div>
</section>

<section id="depoimentos">
    <div class="container">
        <div class="py-3">
            <h1 class="titulo-section color-primary text-center mt-3 mb-5">
                Depoimentos
            </h1>

            <div class="row justify-content-around">

            <?php
                  $args = array(
                    'post_type' => 'depoimento',
                    'posts_per_page' => 3
                  )     ;         
                  $the_query = new WP_Query($args);
                  if ($the_query->have_posts()):
                    while($the_query->have_posts()):
                      $the_query->the_post();
                ?>
          
                  <div class="col-md-3 col-sm-12">
                    <div class="card card-depoimento border-0">
                        <div class="avatar mx-auto mb-2">
                            <img class="w-100" src="<?php echo get_the_post_thumbnail_url();?>" alt="" srcset="">
                        </div>

                        <div class="nome mb-2">
                            <h3 class="text-center color-secondary"><?php echo get_the_title();?></h3>
                        </div>

                        <div class="depoimento">
                            <p>
                                <?php the_content();?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                  endwhile;
                  wp_reset_postdata();
                endif;
            ?>

        
         
               
           
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>
