<?php
/*
Template Name: Homepage
*/

?>

<?php 

if ( is_front_page() ) :
	get_header( 'home' );
else :
	get_header();
endif;?>

  <div class="darkHero lg:h-[75vh] bg-dark text-white inner_wrap pt-28 pb-72"> 
    <h1 class="max-w-4xl"><?php the_field('intro_section_text'); ?></h1>
<h4><?php the_field('intro_sub_tekst'); ?></h4>

  </div>


<div id="gallery" class="sm:inner_wrap">


<?php
$images = get_field('forside_billeder');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if ($images) : ?>
    <ul class="md:columns-2 2xl:columns-3 gap-4 mt-4 md:-mt-28 space-y-4">
        <?php foreach ($images as $image_id) : ?>
            <li class="w-full break-inside-avoid-column">
                <?php echo wp_get_attachment_image($image_id, $size); ?>


            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>







<?php get_footer(); ?>