<?php
/* 
  Template Name: Serviços
 */
 get_header();
?>



<main>
    <section id="titulo-servicos" class="p-5" style="background-image: url('<?php assets(); ?>/img/construction-site-of-new-house.jpg');background-repeat: no-repeat; background-position: center;background-size: cover;">
        <h1 class="titulo-section text-center color-white">Conheça Nossos Serviços</h1>
    </section>


    <section id="servicos-posts">


            <?php
                  $args = array(
                    'post_type' => 'servico',
                    'posts_per_page' => -1
                  )     ;         
                  $the_query = new WP_Query($args);
                  if ($the_query->have_posts()):
                    while($the_query->have_posts()):
                      $the_query->the_post();
                ?>
          
        <div class="row">

            <div class="col-md-6 sol-sm-12">
                <div class="row h-100">
                    <div class="p-dif">
                        <h1 class="titulo-section color-secondary mb-5"><?php echo get_the_title();?></h1>
                        <p class="font-1-5rem">
                            <?php echo get_the_content();?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 sol-sm-12 p-0">
                <img class='w-100 h-100' style="object-fit: cover;" src="<?php the_post_thumbnail_url();?>" alt="" srcset="">
            </div>
        </div>

        <?php
            endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </section>
</main>


<?php
get_footer();
?>
