<section>

		<?php if ( have_comments() ) : ?>
		<article>		
			<div  class="comments-content">
			  <h3>Comments</h3>
			  <ul>
			  	<?php wp_list_comments( array( 'type'=>'comment' ) ); ?>
			  </ul>
			  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			    <?php previous_comments_link( __( '&larr; Older Comments', 'twentyten' ) ); ?>
			    <?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyten' ) ); ?>
			  <?php endif; // check for comment navigation ?>
			</div>
		</article>
		  
		<?php else: ?>
		  <?php if ( ! comments_open() ) : ?>
			<article>
				<div  class="comments-content">
				    <p>Comments are closed.</p>
				</div>
			</article>
		  <?php endif; ?>
		<?php endif; ?>
		
		<?php // Start Comment Form ?>
		<?php if ('open' == $post->comment_status) : ?>
		<article>
			<div  class="comments-content">
			  <h3>Add Comment</h3>
			  <form  method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
			    <div>
			      <label for="author">Name<?php if ($req) echo "*"; ?></label>
			      <input type="text" name="author" id="author" />
			    </div>
			    <div>
			      <label for="email">Email<?php if ($req) echo "*"; ?></label>
			      <input type="text" name="email" id="email" />
			    </div>
			    <div>
			      <label for="comment">Comment</label>
			      <textarea name="comment" id="comment" cols="50" rows="5"></textarea>
			    </div>
			    <div>
			      <input type="submit" value="Submit" />
			      <?php comment_id_fields(); ?>
			    </div>
			    <?php do_action('comment_form', $post->ID); ?>
			  </form>
			</div>
		</article>
		<?php endif;?>
</section>