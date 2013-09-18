<?php get_header(); ?>

<?php //query_posts( 'posts_per_page=1' );?>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article <?php if ( has_post_thumbnail() ) { echo('class="thumb"');} ?>>
  
  	<a href="<?php the_permalink(); ?>">
  		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	  the_post_thumbnail();
  	} ?>
  	</a>
	<div class="article-content">
	    <div class="article-title">
		    <?php the_author_post_rating(); ?>
		    <h1>
		      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    </h1>
		    <?php 
		    	if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');
		    ?>
	    </div>
	    <?php //edit_post_link('Edit','','<strong>|</strong>'); ?>
	    
	    <?php the_content('Lire l&rsquo;article…'); ?>
	</div>
  </article>


  <?php endwhile; wp_reset_query(); ?>

	<div><?php next_posts_link( '<' ); ?> 	<?php previous_posts_link( '>' ); ?></div>

<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>


<?php get_footer(); ?>