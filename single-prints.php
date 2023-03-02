<?php get_header(); ?>

<div class="inner_wrap">

  <div class="md:h-[56vh] pt-28"> 
   <h1 class="max-w-4xl"><?php the_title(); ?></h1>

  </div>


<div class="md:flex">
    <div class="md:basis-1/2 xl:basis-2/3 md:pr-12">


        <?php if (have_rows('print_image')) : ?>

            <div class="print_thumbs">

                <?php while (have_rows('print_image')) : the_row(); ?>

                    <img class="mb-4" src="<?php the_sub_field('image'); ?>" alt="<?php the_title_attribute(); ?>">


                <?php endwhile; ?>

            <?php endif; ?>

            </div>

    </div><!-- /.basis-2/3 -->

    <div class="basis-1/2 xl:basis-1/3 py-8 md:py-24 2xl:py-40">

   

    
     <?php 

   $information = get_field( "information_om_billede" );

if( $information ) {
    echo '<div id="printInfo" class="block border-t border-b w-full pt-8 pb-8 pl-4">' . '<p class="label pb-2">Information</p>' . '<p>' . $information . '</p>' . '</div>';
} 
   
   ?>

    <?php

if(get_field('pris'))
{
    echo '<div class="block border-b w-full py-3 pl-4">' . '<p class="label">Pris</p>' . '<p class ="label_numbers font-bold">' . get_field('pris') .'<span class="font-normal text-sm pl-2">' . 'dkk' . '</span>' . '</p>' . ' </div>';
}

?>
    


<?php

if(get_field('papir'))
{
    echo '<div class="block border-b w-full py-3 pl-4">' . '<p class="label">Trykt på</p>' . '<p>' . get_field('papir') . '</p>' . ' </div>';
}

?>





<div class="flex flex-wrap w-full justify-between">

<?php

if(get_field('oplag'))
{
    echo '<div class="block w-1/2 border-b border-r py-3 pl-4">' . '<p class="label">Udgave</p>' . '<p class="label_numbers">' . get_field('oplag') . '</p>' . ' </div>';
}

?>

<?php

if(get_field('aar'))
{
    echo '<div class="block w-1/2 border-b py-3 pl-4">' . '<p class="label">År</p>' . '<p class="label_numbers">' . get_field('aar') . '</p>' . ' </div>';
}

?>
   
</div><!-- /.flex --> 




<div class="block border-b w-full pt-8 pb-8 pl-4">
    <p>For uforpligtende henvendelser <br />og spørgsmål om køb. Send besked via <br /> <a class="underline" href="mailto:info@larsvandersen.com">info@larsvandersen.com</a></p>
</div><!-- / -->

<div class="block border-b w-full pt-8 pb-8 pl-4">
    <p class="label pb-2">International shipping</p>
    <p>
Cost of any added import duties and taxes, are not included and the responsibility is the buyers.

</p>
</div><!-- / -->














         

        <p class="h2 mb-8"><?php the_field('behind_the_image'); ?></p>


       



        <?php
        if (get_field('signeret')) {
            echo '<p class="mb-8 font-medium">Signeret, nummereret og med titel på bagside af både print og ramme.</p>';
        }
        ?>







    </div><!-- /.basis -->
</div><!-- /.flex -->

</div><!-- /.inner_wrap -->

<?php get_footer(); ?>