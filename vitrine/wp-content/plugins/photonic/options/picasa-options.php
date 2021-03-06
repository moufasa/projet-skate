<?php
global $photonic_picasa_options;

$photonic_picasa_options = array(
	array("name" => "Picasa settings",
		"desc" => "Control settings for Picasa",
		"category" => "picasa-settings",
		"type" => "section",),

	array("name" => "Google Client ID",
		"desc" => "Enter your Google Client ID. You can get / create one from Google's <a href='https://code.google.com/apis/console#access'>API Console</a>.
			While setting up your Google Client ID from the API Console:
			<ol>
				<li>Use the option for 'Client ID for web applications'.</li>
				<li>Make sure that you add ".site_url()." as your Redirect URI. <strong>Without that your authentication will not work.</strong></li>
			</ol>
			<strong>You only need this if you have private photos that you want people to login to see.</strong>",
		"id" => "picasa_client_id",
		"grouping" => "picasa-settings",
		"type" => "text",
		"std" => ""),

	array("name" => "Google Client Secret",
		"desc" => "Enter your Google Client Secret.	You only need this if you have private photos that you want people to login to see.",
		"id" => "picasa_client_secret",
		"grouping" => "picasa-settings",
		"type" => "text",
		"std" => ""),

	array("name" => "Private Photos",
		"desc" => "Let visitors of your site login to Picasa to see private photos for which they have permissions (will show a login button if they are not logged in)",
		"id" => "picasa_allow_oauth",
		"grouping" => "picasa-settings",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Login Box Text",
		"desc" => "If private photos are enabled, this is the text users will see before the login button (you can use HTML tags here)",
		"id" => "picasa_login_box",
		"grouping" => "picasa-settings",
		"type" => "textarea",
		"std" => "Some features that you are trying to access may be visible to logged in users of Picasa only. Please login if you want to see them."),

	array("name" => "Login Button Text",
		"desc" => "If private photos are enabled, this is the text users will see before the login button (you can use HTML tags other than &lt;a&gt; here)",
		"id" => "picasa_login_button",
		"grouping" => "picasa-settings",
		"type" => "text",
		"std" => "Login"),

	array("name" => "Photo titles",
		"desc" => "Use the Picasa photo description instead of the title to show the photo title",
		"id" => "picasa_use_desc",
		"grouping" => "picasa-settings",
		"type" => "select",
		"options" => array(
			"title" => "Always use the photo title",
			"desc-title" => "Use the description instead of the title, if available",
			"desc" => "Use the description even if blank",
		),
		"std" => "desc-title"),

	array("name" => "Picasa Photos - \"In-page\" View",
		"desc" => "Control settings for Picasa Photos when displayed in your page",
		"category" => "picasa-photos",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you use the shortcode format <code>[gallery type='picasa' user_id='abc']</code>. In other words, the photos are printed directly on the page.",
		"grouping" => "picasa-photos",
		"type" => "blurb",),

	array("name" => "Photo Title Display",
		"desc" => "How do you want the title of the photos?",
		"id" => "picasa_photo_title_display",
		"grouping" => "picasa-photos",
		"type" => "select",
		"options" => array(
			"regular" => "Normal title display using the HTML \"title\" attribute",
			"below" => "Below the thumbnail",
			"tooltip" => "Using the <a href='http://bassistance.de/jquery-plugins/jquery-plugin-tooltip/'>JQuery Tooltip</a> plugin",
		),
		"std" => "tooltip"),

	array("name" => "Constrain Photos Per Row",
		"desc" => "How do you want the control the number of photo thumbnails per row? This can be overridden by adding the '<code>columns</code>' parameter to the '<code>gallery</code>' shortcode.",
		"id" => "picasa_photos_per_row_constraint",
		"grouping" => "picasa-photos",
		"type" => "select",
		"options" => array("padding" => "Fix the padding around the thumbnails",
			"count" => "Fix the number of thumbnails per row",
		),
		"std" => "padding"),

	array("name" => "Constrain by padding",
		"desc" => " If you have constrained by padding above, enter the number of pixels here to pad the thumbs by",
		"id" => "picasa_photos_constrain_by_padding",
		"grouping" => "picasa-photos",
		"type" => "text",
		"hint" => "Enter the number of pixels here (don't enter 'px'). Non-integers will be ignored.",
		"std" => "15"),

	array("name" => "Constrain by number of thumbnails",
		"desc" => " If you have constrained by number of thumbnails per row above, enter the number of thumbnails",
		"id" => "picasa_photos_constrain_by_count",
		"grouping" => "picasa-photos",
		"type" => "slider",
		"options" => array("range" => "min", "min" => 1, "max" => 25, "step" => 1, "size" => "400px", "unit" => ""),
		"std" => 5),

	array("name" => "Photo Thumbnail Border",
		"desc" => "Setup the border of photo thumbnail when the photo is displayed as a part of a photoset or in a photo-stream. This is valid for the short-code usage <code>[gallery type='flickr' photoset_id='xyz']</code>, or <code>[gallery type='flickr' user_id='abc' view='photos']</code>.",
		"id" => "picasa_photo_thumb_border",
		"grouping" => "picasa-photos",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Photo Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the photo thumbnail and its border.",
		"id" => "picasa_photo_thumb_padding",
		"grouping" => "picasa-photos",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Picasa Photos - \"Popup\" View",
		"desc" => "Control settings for Picasa Photos when displayed in a popup",
		"category" => "picasa-photos-pop",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you use the shortcode format <code>[gallery type='picasa' user_id='abc']</code>. In other words, the photos are printed directly on the page.",
		"grouping" => "picasa-photos-pop",
		"type" => "blurb",),

	array("name" => "Photo Title Display",
		"desc" => "How do you want the title of the photos?",
		"id" => "picasa_photo_pop_title_display",
		"grouping" => "picasa-photos-pop",
		"type" => "select",
		"options" => array(
			"regular" => "Normal title display using the HTML \"title\" attribute",
			"below" => "Below the thumbnail",
			"tooltip" => "Using the <a href='http://bassistance.de/jquery-plugins/jquery-plugin-tooltip/'>JQuery Tooltip</a> plugin",
		),
		"std" => "tooltip"),

	array("name" => "Constrain Photos Per Row",
		"desc" => "How do you want the control the number of photo thumbnails per row? This can be overridden by adding the '<code>columns</code>' parameter to the '<code>gallery</code>' shortcode.",
		"id" => "picasa_photos_pop_per_row_constraint",
		"grouping" => "picasa-photos-pop",
		"type" => "select",
		"options" => array("padding" => "Fix the padding around the thumbnails",
			"count" => "Fix the number of thumbnails per row",
		),
		"std" => "padding"),

	array("name" => "Constrain by padding",
		"desc" => " If you have constrained by padding above, enter the number of pixels here to pad the thumbs by",
		"id" => "picasa_photos_pop_constrain_by_padding",
		"grouping" => "picasa-photos-pop",
		"type" => "text",
		"hint" => "Enter the number of pixels here (don't enter 'px'). Non-integers will be ignored.",
		"std" => "15"),

	array("name" => "Constrain by number of thumbnails",
		"desc" => " If you have constrained by number of thumbnails per row above, enter the number of thumbnails",
		"id" => "picasa_photos_pop_constrain_by_count",
		"grouping" => "picasa-photos-pop",
		"type" => "slider",
		"options" => array("range" => "min", "min" => 1, "max" => 25, "step" => 1, "size" => "400px", "unit" => ""),
		"std" => 5),

	array("name" => "Photo Thumbnail Border",
		"desc" => "Setup the border of photo thumbnail when the photo is displayed as a part of a photoset or in a photo-stream. This is valid for the short-code usage <code>[gallery type='flickr' photoset_id='xyz']</code>, or <code>[gallery type='flickr' user_id='abc' view='photos']</code>.",
		"id" => "picasa_photo_pop_thumb_border",
		"grouping" => "picasa-photos-pop",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Photo Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the photo thumbnail and its border.",
		"id" => "picasa_photo_pop_thumb_padding",
		"grouping" => "picasa-photos-pop",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),
);
?>