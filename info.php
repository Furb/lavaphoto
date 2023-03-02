<?php
/*
Template Name: Info
*/

?>

<?php get_header(); ?>

<div class="inner_wrap">
    
  <div class="pt-28 pb-72"> 
   <p class=" h2 max-w-4xl"><?php the_field('intro'); ?></p>

 

  </div>
<div class="flex justify-between">
    <div class="w-1/3">


      <div class="block border-t border-b w-full pt-8 pb-8 pl-4">
            <p class="label font-bold mb-4">Følg min fotokunst</p><!-- / -->
            <p><?php echo do_shortcode('[custom-facebook-feed num=1]'); ?></p>

        </div><!-- / --> 


        <div class="block border-t border-b w-full pt-8 pb-8 pl-4">
            <p class="label font-bold mb-4">Samarbejde og tidligere udstlillinger</p><!-- / -->
            <?php

// Check rows existexists.
if( have_rows('udstillinger') ):

    // Loop through rows.
    while( have_rows('udstillinger') ) : the_row();

        // Load sub field value.
        $steder = get_sub_field('sted');
       echo '<p class ="label">' .  $steder .'</p>';

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

?>
        </div>

        



       

    </div>
    <div class="w-1/2">
         <img src="/wp-content/uploads/2023/03/lars_profil.jpg" alt="">
    </div><!-- /.flex-2 -->
       
    

</div><!-- /.flex -->
</div><!-- /.inner_wrap -->
<?php get_footer(); ?>