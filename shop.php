<?php
/*
Template Name: Shop
*/

?>

<?php get_header(); ?>

<div class="inner_wrap">




  <div class="h-[56vh] pt-28 pb-72"> 
   <h1 class="max-w-4xl"><?php the_field('shop_overskrift'); ?></h1>
<h4><?php the_field('underforklaring'); ?></h4>
  </div>


<div class="md:columns-2 gap-8 space-y-24 mb-24">


    <?php
    $prints = new WP_Query(
        array(
            'post_type' => 'prints',
            // This is the name of your post type - change this as required,
            'posts_per_page' => 50 // This is the amount of posts per page you want to show,
        )
    );



    while ($prints->have_posts()) :
        $prints->the_post();

    ?>


        <?php if (has_post_thumbnail()) : ?>

            <div class="flex flex-wrap flex-col mb-24 group justify-between break-inside-avoid-column">

                <div class="shop_image w-full border-[0.875rem] border-black shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                </div><!-- /.image -->
                <div class="flex justify-between px-2 md:px-8 pt-8 flex-wrap">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="underline hover:no-underline max-w-xs xl:max-w-sm">
                            <?php the_title(); ?>
                        </h2>
                    </a>


                    <?php

                    $price = get_field('pris');
                    if ($price) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="pl-8 font-normal"><?php the_field('pris') ?>,-</h2>
                        </a>
                    <?php endif; ?>





                </div><!-- /.flex -->
            </div><!-- /.flex flex col mb-24 group -->








        <?php endif; ?>


    <?php endwhile;
    wp_reset_postdata();


    ?>

</div><!-- /.grid -->

</div><!-- /.inner_wrap -->


<?php get_footer(); ?>