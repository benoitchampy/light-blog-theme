<?php get_header(); ?>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article class="main-article">
  	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	  the_post_thumbnail();
  	} ?>
	<div class="article-content">
		<div class="article-title">
		    <h1>
		      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    </h1>
		</div>

	    <?php 
	    	if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');
	    ?>
	    <?php /*
	    <?php edit_post_link('Edit','','<strong>|</strong>'); ?>
	    <span class="category"><?php the_category(', ') ?></span> */ ?>
	    <?php the_content(); ?>
	    <span class="tags"><?php the_tags( "#", " #", $after ); ?></span>
	</div>

  </article>
  <nav class="posts-nav">
  	<?php previous_post_link('%link', '&#9664; %title', TRUE); ?>
  	<?php next_post_link(' %link', '%title &#9654;', TRUE); ?>

  </nav>

  <?php endwhile; wp_reset_query(); ?>
<?php else: ?>
	<article>
	  <h2>No posts found</h2>
	</article>
<?php endif; ?>



<?php comments_template( '', true ); ?>

<?php get_footer(); ?>