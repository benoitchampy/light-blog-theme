<?php get_header(); ?>

<?php //query_posts( 'posts_per_page=1' );?>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article <?php if ( has_post_thumbnail() ) { echo('class="thumb"');} ?>>


    <?php if ( in_category( 'reviews' )) { ?>
	    <div class="article-content">
		    <div class="article-title">
		    	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <?php the_author_post_rating(); ?></a></h1>
		    </div>
		    <?php the_content('Lire l&rsquo;article…'); ?>
	    </div>
    <?php
    } else { ?>
  
  	<a href="<?php the_permalink(); ?>">
  		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	  the_post_thumbnail();
  	} ?>
  	</a>
	<div class="article-content">
	    <div class="article-title">
		    
		    <h1>
		      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    </h1>
		    <?php the_author_post_rating(); ?>
		    <?php 
		    	if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');
		    ?>
	    </div>
	    <?php //edit_post_link('Edit','','<strong>|</strong>'); ?>
	    <div><?php the_content('…'); ?></div>
	</div>
	<?php } ?>
  </article>


  <?php endwhile; wp_reset_query(); ?>
	<nav  class="posts-nav">
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<?php posts_nav_link(' ', '&#9654;', '&#9664;'); ?>
		<?php endif; ?>
	</nav>
<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>


<?php get_footer(); ?>