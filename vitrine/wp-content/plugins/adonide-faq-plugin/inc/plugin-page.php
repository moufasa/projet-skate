<?php
include('functions.php');   
?><div class="wrap columns-2">
	<div id="icon-html-faq-page" class="icon32"></div>
	<h2><?php _e('Questions', 'html-faq-page'); ?></h2>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="postbox-container-1" class="postbox-container"> 
				<div class="postbox">
					<h3><span><?php _e('Like this Plugin', 'html-faq-page'); ?></span></h3>
					<div class="inside">
						<p>
							<?php _e('Please take a moment to support future development', 'html-faq-page'); ?>: 
							<ol>
								<li><a href="http://wordpress.org/extend/plugins/adonide-faq-plugin/"><?php _e('Rate it 5 Stars on WordPress.org', 'html-faq-page'); ?>.</a></li> 
								<li>
								<a target='_blank' href='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MEUX57DRQRHY4'>
								<?php _e('Make a donation', "html-faq-page"); ?></a>
								</li> 
							</ol> 
							<center><img src="<?php echo plugins_url('paypal.gif', __FILE__);?>" alt="paypal" /><br/>
							<?php _e('Thanks for your SUPPORT', "html-faq-page"); ?></center>
						</p> 
					</div>
				</div>
				<div class="postbox">
					<h3><span><?php _e('Quick Guide', 'html-faq-page'); ?></span></h3>
					<div class="inside">
						<p>
							<?php _e('Steps', 'html-faq-page'); ?>: 
							<ol>
								<li><?php _e('Select Question from the left menu, add questions and answers', 'html-faq-page'); ?>.</li>
								<li><?php _e('Add <code>[faq collect cat=3]</code> anywhere into your posts on pages', 'html-faq-page'); ?>.</li> 
								<li><?php _e("Done, yeah that's easy", "html-faq-page"); ?></li>
							</ol> 
						</p> 
					</div>
				</div> 
			</div>
			<div id="postbox-container-2" class="postbox-container">
				<div class="stuffbox">
					<h3><label><?php _e('About', 'html-faq-page' ); ?></label></h3>
					<div class="inside" style="overflow: auto;"> 
						<center><img src="<?php echo plugins_url('faq.jpg', __FILE__);?>" alt="" /></center> 
					</div>
				</div> 
				<div class="stuffbox">
					<h3><label><?php _e('Questions Lists', 'html-faq-page' ); ?></label></h3>
					<div class="inside" style="overflow: auto;">
					<?php get_html_faq_questions_taxonomies();?> 
					</div>
				</div> 
			</div>
		</div>
	</div>
</div> 