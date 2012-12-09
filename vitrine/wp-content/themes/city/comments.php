<?php /* The template for displaying Comments*/ ?>
  
  <!-- What Says Our Company -->
  <div class="grid_8 margin leftsays">
      
      <div id="full-bottom2"></div>
      
      <div class="title-2cloumb">
          <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langpostcommentlist') ) : ?>
          <h1><?php get_option_tree( 'langpostcommentlist', '', 'true' ); ?></h1>
		  <?php else : ?>
          <h1>Post Comment List</h1>
          <?php endif; endif; ?>
          <p>
			  <?php if ( post_password_required() ) : ?>
              <?php _e( 'This post is password protected. Enter the password to view any comments.', '' ); ?>	
              <?php return; endif;?>
              <?php if ( have_comments() ) : ?>
			  <?php
              printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), '' ),
              number_format_i18n( get_comments_number() ), '' . get_the_title() . '' );
              ?>
              </p>
      </div>
      
      <div class="leftcloumb-list">
          <ul>
          	<?php
				
				function twentyten_comment( $comment, $args, $depth ) {
					$GLOBALS['comment'] = $comment;
					switch ( $comment->comment_type ) :
						case '' :
					?>
				  
						 <li>
						 <?php echo get_avatar( $comment, 58 ); ?> 
						 <h1><?php printf( __( '%s', '' ), sprintf( '%s', get_comment_author_link() ) ); ?> <?php printf( __( '%1$s at %2$s', '' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', '' ), ' ' ); ?></h1>
						 <p class="commentp"><?php comment_text(); ?></p>
				
							<?php if ( $comment->comment_approved == '0' ) : ?>
							<p><?php _e( 'Your comment is awaiting moderation.', '' ); ?></p>
							<?php endif; ?>
                         <div class="margin12 fright"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
						 </li>
					
						<?php break; endswitch; } ?>
                        <?php
                          /* Loop through and list the comments. Tell wp_list_comments()
                           * to use twentyten_comment() to format the comments.
                           * If you want to overload this in a child theme then you can
                           * define twentyten_comment() and that will be used instead.
                           * See twentyten_comment() in twentyten/functions.php for more.
                           */
                          wp_list_comments( array( 'callback' => 'twentyten_comment' ) );
						?>
          
			  <?php else : if ( ! comments_open() ) :?>
              <p><?php _e( 'Comments are closed.', '' ); ?></p>
              <?php endif; // end ! comments_open() ?>
              <p>No Comment</p>
              <?php endif; // end have_comments() ?>
          </ul>
      </div>
      
          
  </div>
  <!-- What Says Our Company End -->
  
  <!-- Bigg Boss -->
  <div class="grid_8 margin">
      <div class="title-2cloumb">
          <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'langpostcommentform') ) : ?>
          <h1><?php get_option_tree( 'langpostcommentform', '', 'true' ); ?></h1>
		  <?php else : ?>
          <h1>Comment Form</h1>
          <?php endif; endif; ?>
          <p><?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.
<?php else : ?></p>
      </div>
      
      <div class="dnone">
      	<?php comment_form(); ?>
        <?php paginate_comments_links(); ?>
        <?php wp_link_pages( $args ); ?>
      </div>
      
      <div class="comment-form margin">
          <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
          
          <?php if ( $user_ID ) : ?>
		  <?php else : ?>
          
          <fieldset><input id="author" name="author" type="text" value="Name:" onfocus="if(this.value=='Name:')this.value='';" onblur=	"if(this.value=='')this.value='Name:';"/></fieldset>  
          <fieldset><input id="email" name="email" type="text" value="E-Mail:" onfocus="if(this.value=='E-Mail:')this.value='';" onblur=	"if(this.value=='')this.value='E-Mail:';"/></fieldset>
          <fieldset><input id="url" name="url" type="text" value="Web:" onfocus="if(this.value=='Web:')this.value='';" onblur=	"if(this.value=='')this.value='Web:';"/></fieldset>
          
          <?php endif; ?>
          
          <fieldset><textarea id="comment" name="comment" onfocus="if(this.value=='Message:')this.value='';" onblur=	"if(this.value=='')this.value='Message:';">Message:</textarea></fieldset>
          <div class="fright"><fieldset><input id="submit" type="submit" value="Send" /></fieldset></div>
          
          <?php comment_id_fields(); ?>
		  <?php do_action('comment_form', $post->ID); ?>
          
           </form>
           <?php endif; // If registration required and not logged in ?>
      </div>
  </div>
  <!-- Bigg Boss End -->