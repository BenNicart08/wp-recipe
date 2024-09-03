<?php get_header()?>

<section class="page__banner bg-light_accent mb-[180px]">
      <div class="container px-4 mx-auto">
        <div class="text-center pt-10">
          <h1 class="-mb-7">About The Recipe</h1>
          <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }?>
        </div>
      </div>
    </section>

    <section class="page__content mb-20">
      <div class="container px-4 mx-auto">
        <div
          class="grid grid-cols-1 md:grid-cols-[1fr_350px] gap-10 max-w-[1000px] w-full mx-auto"
        >
          <div class="page__body max-w-[800px] w-full mx-auto">
            <h2>About the Recipe</h2>
            <?php the_content()?>
            <ul>
              <li><?php echo get_post_meta(get_the_ID(), "Address1", true)?></li>
              <li><?php echo get_post_meta(get_the_ID(), "Address2", true)?></li>
              <li><?php echo get_post_meta(get_the_ID(), "Address3", true)?></li>
            </ul>
          </div>

          <div class="page__sidebar">
            <h4 class="mb-10">Looking for something else</h4>
            <?php $secondary = new WP_Query(array(
                  'post_type' => 'post',
                  'posts_per_page' => 3, 
                  'orderby' => 'rand',
                  'post__not_in' => array(get_the_ID())
                  ))?>
                
                <?php if($secondary->have_posts()) : while ($secondary->have_posts()) : $secondary->the_post(); ?>

                  <div class="recipe__card flex gap-5 mb-5">
                      <?php if(has_post_thumbnail()){
                          the_post_thumbnail();
                      }?>
                    <div>
                      <small><?php echo get_post_meta(get_the_ID(), "food", true)?></small>
                      <h5><?php the_title()?></h5>
                      <ul class="flex gap-1">
                        <li><i class="fas fa-star text-accent"></i></li>
                        <li><i class="fas fa-star text-accent"></i></li>
                        <li><i class="fas fa-star text-accent"></i></li>
                        <li><i class="fas fa-star text-accent"></i></li>
                      </ul>
                      <a href="<?php the_permalink()?>">Get recipe</a>
                    </div>
                  </div>

            <?php endwhile;
                    else:
                        echo "No More Recipe";
                    endif; 
                    wp_reset_postdata();
                ?>

          </div>
        </div>
      </div>
    </section>

<?php get_footer()?>