<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
                    <h1><?php the_title(); ?></h1>
                   

                    <?php the_content(); ?>
                    
               
            <!-- post -->
            <?php endwhile; ?>
            <!-- post navigation -->
            <?php else: ?>
                <div class="page-header">
                    <h2>Gah, I can't find the post you're looking for!</h2>
                </div>
            <!-- no posts found -->
            <?php endif; ?>

   
          

           

<?php get_footer(); ?>

 
</html>