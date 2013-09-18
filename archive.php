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
<ul class="large-block-grid-4 small-block-grid-2">
  <?php while ( have_posts() ) : the_post(); ?>
    <li class="grid-item">
    <?php if ( in_category( 'reviews' )) { ?>
	
	   
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <br/>
    <?php the_author_post_rating(); ?>

    <?php
    } else {?>
    <h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
    	<?php the_excerpt();
    }
    ?>
    </li>
  <?php endwhile; wp_reset_query(); ?>
<?php else: ?>
  <h2>No posts found</h2>
</ul>
<?php endif; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
    <?php next_posts_link( __( '<' ) ); ?> <?php previous_posts_link( __( '>' ) ); ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>