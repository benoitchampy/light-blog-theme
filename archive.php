<?php get_header(); ?>

<?php /*
<h1>
  <?php if( is_author() ): ?>
    Author: <?php echo $author_name ?>
  <?php elseif( is_category() ): ?>
    Category: <?php single_cat_title(); ?>
  <?php elseif( is_tag() ): ?>
    Tag: <?php single_tag_title(); ?>
  <?php elseif( is_year() ): ?>
    Archive for <?php the_time('Y'); ?>
  <?php elseif( is_month() ): ?>
    Archive for <?php the_time('F Y'); ?>
  <?php else: ?>
    Archive
  <?php endif; ?>
</h1>
*/ ?>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
	<article>
    <?php if ( in_category( 'reviews' )) { ?>
        <h1 class="review-content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <br/><?php the_author_post_rating(); ?></a></h1>
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
		    
		    <?php the_content('Lire l&rsquo;article…'); ?>
		</div>
	<?php } ?>
	</article>

  <?php endwhile; wp_reset_query(); ?>
  </ul>
<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav class="posts-nav">
	<?php posts_nav_link(' ', '&#9664;', '&#9654;'); ?>
	</nav>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>