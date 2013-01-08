<?php


if ( ! isset( $content_width ) ) $content_width = 900;

function my_init() {
	if (!is_admin()) {
		wp_enqueue_script('google', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js');
		wp_enqueue_script('general', '/wp-content/themes/city/js/general.js');
		wp_enqueue_script('fancy', '/wp-content/themes/city/fancybox/jquery.mousewheel-3.0.4.pack.js');
		wp_enqueue_script('fancyy', '/wp-content/themes/city/fancybox/jquery.fancybox-1.3.4.pack.js');
	}
}
add_action('init', 'my_init');

add_filter( 'show_admin_bar', '__return_false' );

function wp_echoTwitter($username){
						
						// Prefix - some text you want displayed before your latest tweet.
						// (HTML is OK, but be sure to escape quotes with backslashes: for example href=\"link.html\")
						$prefix = "";
						
						// Suffix - some text you want display after your latest tweet. (Same rules as the prefix.)
						$suffix = "";
						
						$feed = "http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=1";
						
						function parse_feed($feed) {
							$stepOne = explode("<content type=\"html\">", $feed);
							$stepTwo = explode("</content>", $stepOne[1]);
							$tweet = $stepTwo[0];
							$tweet = str_replace("&lt;", "<", $tweet);
							$tweet = str_replace("&gt;", ">", $tweet);
							return $tweet;
						}
						
						$twitterFeed = file_get_contents($feed);
						echo stripslashes($prefix) . parse_feed($twitterFeed) . stripslashes($suffix);
						}

/* Top Menu */
 register_nav_menus(array(
'topmenu' => 'menu'
));

if ( function_exists('register_sidebar') )
register_sidebars(1,array('name' => 'Blog Categories','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));
register_sidebars(1,array('name' => 'Blog Tags','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));
register_sidebars(1,array('name' => 'Blog Archives','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));
register_sidebars(1,array('name' => 'Page Sidebar','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));
register_sidebars(1,array('name' => 'Top Contact Form Popup','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));
register_sidebars(1,array('name' => 'Top Adress Detail Popup','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));
register_sidebars(1,array('name' => 'Footer Left - Blog Categories','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));
register_sidebars(1,array('name' => 'Footer Center - Portfolio','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));
register_sidebars(1,array('name' => 'Footer Right Top - Twitter','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>'));

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes(){
    return 'class="minibutton margin8"';
}

// Button 1 //
function sc_bt1($atts) {
extract(shortcode_atts(array(
"url" => '',
"title" => '',
"desc" => '',
"ajax" => '',
"align" => ''
), $atts));

if ($align == '') {
$align='center';
}

$var_sHTML = '';
$var_sHTML .= ' 
<a href="' . $url . '" class="minibutton ' . $ajax . '" title="' . $desc . '">' . $title . '</a>
';

if ($align == 'right' || $align == 'left') {
$var_sHTML .= '';
}

return $var_sHTML;
}

add_shortcode('red-button', 'sc_bt1');

// Button 1 //
function sc_bt2($atts) {
extract(shortcode_atts(array(
"url" => '',
"title" => '',
"desc" => '',
"ajax" => '',
"align" => ''
), $atts));

if ($align == '') {
$align='center';
}

$var_sHTML = '';
$var_sHTML .= ' 
<a href="' . $url . '" class="middlebutton ' . $ajax . '" title="' . $desc . '">' . $title . '</a>
';

if ($align == 'right' || $align == 'left') {
$var_sHTML .= '';
}

return $var_sHTML;
}

add_shortcode('red-medium', 'sc_bt2');

// Button 1 //
function sc_bt3($atts) {
extract(shortcode_atts(array(
"url" => '',
"title" => '',
"desc" => '',
"ajax" => '',
"align" => ''
), $atts));

if ($align == '') {
$align='center';
}

$var_sHTML = '';
$var_sHTML .= ' 
<a href="' . $url . '" class="minibutton2 ' . $ajax . '" title="' . $desc . '">' . $title . '</a>
';

if ($align == 'right' || $align == 'left') {
$var_sHTML .= '';
}

return $var_sHTML;
}

add_shortcode('red-mini', 'sc_bt3');

// Button 1 //
function sc_bt4($atts) {
extract(shortcode_atts(array(
"url" => '',
"title" => '',
"desc" => '',
"ajax" => '',
"align" => ''
), $atts));

if ($align == '') {
$align='center';
}

$var_sHTML = '';
$var_sHTML .= ' 
<a href="' . $url . '" class="minibutton-black ' . $ajax . '" title="' . $desc . '">' . $title . '</a>
';

if ($align == 'right' || $align == 'left') {
$var_sHTML .= '';
}

return $var_sHTML;
}

add_shortcode('black-button', 'sc_bt4');

// Button 1 //
function sc_bt5($atts) {
extract(shortcode_atts(array(
"url" => '',
"icon" => '',
"desc" => '',
"ajax" => '',
"align" => ''
), $atts));

if ($align == '') {
$align='center';
}

$var_sHTML = '';
$var_sHTML .= ' 
<a href="' . $url . '" class="minibutton-black iconbutton ' . $ajax . '" ><img src=" ' . $icon . ' " alt=""></a>
';

if ($align == 'right' || $align == 'left') {
$var_sHTML .= '';
}

return $var_sHTML;
}

add_shortcode('icon-black', 'sc_bt5');

// Button 1 //
function sc_bt6($atts) {
extract(shortcode_atts(array(
"url" => '',
"icon" => '',
"desc" => '',
"ajax" => '',
"align" => ''
), $atts));

if ($align == '') {
$align='center';
}

$var_sHTML = '';
$var_sHTML .= ' 
<a href="' . $url . '" class="minibutton iconbutton ' . $ajax . '" ><img src=" ' . $icon . ' " alt=""></a>
';

if ($align == 'right' || $align == 'left') {
$var_sHTML .= '';
}

return $var_sHTML;
}

add_shortcode('icon-red', 'sc_bt6');

// %50 /
add_shortcode( '50l', 'sc_50l' );
function sc_50l( $atts, $content ) {	 
		return '<div class="l50"><p> '.$content.' </p></div>';
	return '';
};

// %50 /
add_shortcode( '50r', 'sc_50r' );
function sc_50r( $atts, $content ) {	 
		return '<div class="r50"><p> '.$content.' </p></div> <div class="clear"></div>';
	return '';
};

// %25 /
add_shortcode( '25l', 'sc_25l' );
function sc_25l( $atts, $content ) {	 
		return '<div class="l25"><p> '.$content.' </p></div>';
	return '';
};

// %25 /
add_shortcode( '25c', 'sc_25c' );
function sc_25c( $atts, $content ) {	 
		return '<div class="c25"><p> '.$content.' </p></div>';
	return '';
};

// %25 /
add_shortcode( '25r', 'sc_25r' );
function sc_25r( $atts, $content ) {	 
		return '<div class="r25"><p> '.$content.' </p></div> <div class="clear"></div>';
	return '';
};

// %75 /
add_shortcode( '75r', 'sc_75r' );
function sc_75r( $atts, $content ) {	 
		return '<div class="r75"><p> '.$content.' </p></div> <div class="clear"></div>';
	return '';
};

// %75 /
add_shortcode( '75l', 'sc_75l' );
function sc_75l( $atts, $content ) {	 
		return '<div class="l75"><p> '.$content.' </p></div>';
	return '';
};


//Title
function the_title_limit($length, $replacer = '...') {
 $string = the_title('','',FALSE);
 if(strlen($string) > $length)
 $string = (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;
 echo $string;
}

function content($num) {
$theContent = get_the_content();
$output = preg_replace('/<img[^>]+./','', $theContent);
$output = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $output );
$output = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $output );
$limit = $num+1;
$content = explode(' ', $output, $limit);
array_pop($content);
$content = implode(" ",$content)."...";
echo $content;
}


// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

// Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.


// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );


add_action( 'widgets_init', 'example_load_widgets' );



function example_load_widgets() {
register_widget( 'Example_Widget' ); }
class Example_Widget extends WP_Widget {

	function Example_Widget() {
		$widget_ops = array( 'classname' => 'example', 'description' => __('City Tags Cloud', 'example') );
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'example-widget' );
		$this->WP_Widget( 'example-widget', __('City Theme - Tags Cloud', 'example'), $widget_ops, $control_ops );}

	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters('widget_title', $instance['title'] );
		$name = $instance['name'];
		echo $before_widget;
		if ( $title )
			echo $before_title . $title . $after_title;
			?>
		
        <?php if ( function_exists('wp_tag_cloud') ) : ?>
        <ul>
        <?php wp_tag_cloud('smallest=9&largest=12&number=14&orderby=name&format=flat'); ?>
        </ul>
        <?php endif; ?>        
		<?php
		echo $after_widget; }

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['name'] = strip_tags( $new_instance['name'] );
		return $instance; }

	function form( $instance ) { ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

	<?php } } ?>