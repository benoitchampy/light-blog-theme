<section>

		<?php if ( have_comments() ) : ?>
		<article class="comments">		
			<div  class="comments-content">
			  <h3><?php _e('Do you have something to say?', 'light-blog-theme'); ?></h3>
			  <ul>
			  	<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
			  </ul>
			  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			    <?php previous_comments_link( __( '&larr; Older Comments', 'twentyten' ) ); ?>
			    <?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyten' ) ); ?>
			  <?php endif; // check for comment navigation ?>
			</div>
		</article>
		  
		<?php else: ?>
		  <?php if ( ! comments_open() ) : ?>
			<article class="comments">
				<div  class="comments-content">
				    <p><?php _e('Les commentaires sont fermés pour cet article', 'light-blog-theme'); ?></p>
				</div>
			</article>
		  <?php endif; ?>
		<?php endif; ?>
		
		<?php // Start Comment Form ?>
		<?php if ('open' == $post->comment_status) : ?>
		<article class="comment-form">
			<div  class="comments-content">
			  <h3><?php _e('Donnez de la voix !', 'light-blog-theme'); ?></h3>
			  <form  method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
			    <div>
			      <label for="author"><?php _e('Nom', 'light-blog-theme'); ?><?php if ($req) echo " * :"; ?></label>
			      <input type="text" name="author" id="author" />
			    </div>
			    <div>
			      <label for="email"><?php _e('Email', 'light-blog-theme'); ?><?php if ($req) echo " *"; ?> <?php _e('(ne sera pas publié) :', 'light-blog-theme');?></label>
			      <input type="text" name="email" id="email" />
			    </div>
			    <div>
			      <label for="comment"><?php _e('Commentaire :', 'light-blog-theme'); ?></label>
			      <textarea name="comment" id="comment" cols="50" rows="5"></textarea>
			    </div>
			    <div>
			      <input type="submit" value="<?php _e('Partager', 'light-blog-theme'); ?>" />
			      <?php comment_id_fields(); ?>
			    </div>
			    <?php do_action('comment_form', $post->ID); ?>
			  </form>
			</div>
		</article>
		<?php endif;?>
</section>