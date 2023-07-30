<?php
/*
Template Name: Info
*/

?>

<?php get_header(); ?>

<div class="inner_wrap">
    
  <div class="pt-20 md:pt-48 pb-28"> 

  <div class="md:flex pb-8 md:pb-12">

  <div class="left md:mr-24">

  <p class="label font-bold mb-4">Følg min fotokunst</p>

  <div class="flex flex-col space-y-4">
       <a href="mailto:info@larsvandersen.com"><h2 class="underline underline-offset-8 hover:no-underline max-w-xs xl:max-w-sm">
        Instagram</h2></a>
        <a href="mailto:info@larsvandersen.com"><h2 class="underline underline-offset-8 hover:no-underline max-w-xs xl:max-w-sm">
        Facebook</h2></a>

  </div><!-- /.flex flex-col space-y-4 -->

     
      
    

        
       
    
            
  </div><!-- /.left -->
  <div class="right">
     <p class="label font-bold mb-4">Email</p><!-- / -->

     
         <a href="mailto:info@larsvandersen.com"><h2 class="underline underline-offset-8 hover:no-underline max-w-xs xl:max-w-sm">
        info@larsvandersen.com</h2></a>


  </div><!-- /.right -->

  </div><!-- /.flex -->

 
    <div class="w-full mb-8">
         <img src="/wp-content/uploads/2023/03/lars_profil.jpg" alt="">
    </div><!-- /.flex-2 -->
     


        <div class="block w-full pt-8 pb-8">
            <p class="label font-bold mb-4">Samarbejde og tidligere udstlillingers</p><!-- / -->
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


    

</div><!-- /.flex -->



</div><!-- /.inner_wrap -->
<?php get_footer(); ?>