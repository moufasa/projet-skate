<?php
global $photonic_instagram_options;

$photonic_instagram_options = array(
	array("name" => "Instagram settings",
		"desc" => "Control settings for Instagram",
		"category" => "instagram-settings",
		"type" => "section",),

	array("name" => "Instagram Client ID",
		"desc" => "Enter your Instagram Client ID. You can get / create one from <a href='http://instagram.com/developer/clients/manage/'>Instagram's site</a>.
			While setting up your Instagram Client ID make sure that you add ".site_url()." as your Redirect URI. <strong>Without that your authentication will not work.</strong>",
		"id" => "instagram_client_id",
		"grouping" => "instagram-settings",
		"type" => "text",
		"std" => ""),

	array("name" => "Instagram Client Secret",
		"desc" => "Enter your Instagram Client Secret.	You only need this if you have private photos that you want people to login to see.",
		"id" => "instagram_client_secret",
		"grouping" => "instagram-settings",
		"type" => "text",
		"std" => ""),

	array("name" => "Private Photos",
		"desc" => "Let visitors of your site login to Instagram to see private photos for which they have permissions (will show a login button if they are not logged in)",
		"id" => "instagram_allow_oauth",
		"grouping" => "instagram-settings",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Login Box Text",
		"desc" => "If private photos are enabled, this is the text users will see before the login button (you can use HTML tags here)",
		"id" => "instagram_login_box",
		"grouping" => "instagram-settings",
		"type" => "textarea",
		"std" => "Some features that you are trying to access may be visible to logged in users of Instagram only. Please login if you want to see them."),

	array("name" => "Login Button Text",
		"desc" => "If private photos are enabled, this is the text users will see before the login button (you can use HTML tags other than &lt;a&gt; here)",
		"id" => "instagram_login_button",
		"grouping" => "instagram-settings",
		"type" => "text",
		"std" => "Login"),

	array("name" => "Media",
		"desc" => "Control settings for Instagram Photos when displayed in your page",
		"category" => "instagram-photos",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section apply to Instagram media displayed on your page.",
		"grouping" => "instagram-photos",
		"type" => "blurb",),

	array("name" => "Expanded size",
		"desc" => "Image size to show when you click on a thumbnail:",
		"id" => "instagram_main_size",
		"grouping" => "instagram-photos",
		"type" => "select",
		"options" => array("low_resolution" => "Low Resolution, 306x306px", "standard_resolution" => "Standard Resolution, 612x612px"),
		"std" => "standard_resolution"),

	array("name" => "Title Display",
		"desc" => "How do you want the title of the photo thumbnail?",
		"id" => "instagram_photo_title_display",
		"grouping" => "instagram-photos",
		"type" => "select",
		"options" => array(
			"regular" => "Normal title display using the HTML \"title\" attribute",
			"below" => "Below the thumbnail",
			"tooltip" => "Using the <a href='http://bassistance.de/jquery-plugins/jquery-plugin-tooltip/'>JQuery Tooltip</a> plugin",
		),
		"std" => "tooltip"),

	array("name" => "Title for single photos",
		"desc" => "For single photos you can display the title as a header or as a caption",
		"id" => "instagram_single_photo_title_display",
		"grouping" => "instagram-photos",
		"type" => "select",
		"options" => array(
			"header" => "Display as a header",
			"caption" => "Display as a caption",
			"none" => "Don't display title",
		),
		"std" => "caption"),

	array("name" => "Link for single photos",
		"desc" => "Link single photos to the corresponding Instagram Page",
		"id" => "instagram_single_photo_link",
		"grouping" => "instagram-photos",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Constrain Photos Per Row",
		"desc" => "How do you want the control the number of photo thumbnails per row? This can be overridden by adding the '<code>columns</code>' parameter to the '<code>gallery</code>' shortcode.",
		"id" => "instagram_photos_per_row_constraint",
		"grouping" => "instagram-photos",
		"type" => "select",
		"options" => array("padding" => "Fix the padding around the thumbnails",
			"count" => "Fix the number of thumbnails per row",
		),
		"std" => "padding"),

	array("name" => "Constrain by padding",
		"desc" => " If you have constrained by padding above, enter the number of pixels here to pad the thumbs by",
		"id" => "instagram_photos_constrain_by_padding",
		"grouping" => "instagram-photos",
		"type" => "text",
		"hint" => "Enter the number of pixels here (don't enter 'px'). Non-integers will be ignored.",
		"std" => "15"),

	array("name" => "Constrain by number of thumbnails",
		"desc" => " If you have constrained by number of thumbnails per row above, enter the number of thumbnails",
		"id" => "instagram_photos_constrain_by_count",
		"grouping" => "instagram-photos",
		"type" => "slider",
		"options" => array("range" => "min", "min" => 1, "max" => 25, "step" => 1, "size" => "400px", "unit" => ""),
		"std" => 5),

	array("name" => "Photo Thumbnail Border",
		"id" => "instagram_photo_thumb_border",
		"grouping" => "instagram-photos",
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
		"id" => "instagram_photo_thumb_padding",
		"grouping" => "instagram-photos",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Users",
		"desc" => "Control settings for Instagram users when displayed in your page",
		"category" => "instagram-users",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section apply to Instagram users (e.g. people following you or followed by you) displayed on your page.",
		"grouping" => "instagram-users",
		"type" => "blurb",),

	array("name" => "Link",
		"desc" => "Link a user's thumbnail to",
		"id" => "instagram_user_link",
		"grouping" => "instagram-users",
		"type" => "select",
		"options" => array("instagram" => "The user's Instagram URL", "home" => "The user's home page, if defined, otherwise the Instagram URL", 'none' => 'Nothing'),
		"std" => "home"
	),

	array("name" => "Title Display",
		"desc" => "How do you want the title of the user thumbnail?",
		"id" => "instagram_user_title_display",
		"grouping" => "instagram-users",
		"type" => "select",
		"options" => array(
			"regular" => "Normal title display using the HTML \"title\" attribute",
			"below" => "Below the thumbnail",
			"tooltip" => "Using the <a href='http://bassistance.de/jquery-plugins/jquery-plugin-tooltip/'>JQuery Tooltip</a> plugin",
		),
		"std" => "tooltip"),

	array("name" => "Constrain Users Per Row",
		"desc" => "How do you want the control the number of user thumbnails per row? This can be overridden by adding the '<code>columns</code>' parameter to the '<code>gallery</code>' shortcode.",
		"id" => "instagram_users_per_row_constraint",
		"grouping" => "instagram-users",
		"type" => "select",
		"options" => array("padding" => "Fix the padding around the thumbnails",
			"count" => "Fix the number of thumbnails per row",
		),
		"std" => "padding"),

	array("name" => "Constrain by padding",
		"desc" => " If you have constrained by padding above, enter the number of pixels here to pad the thumbs by",
		"id" => "instagram_users_constrain_by_padding",
		"grouping" => "instagram-users",
		"type" => "text",
		"hint" => "Enter the number of pixels here (don't enter 'px'). Non-integers will be ignored.",
		"std" => "15"),

	array("name" => "Constrain by number of thumbnails",
		"desc" => " If you have constrained by number of thumbnails per row above, enter the number of thumbnails",
		"id" => "instagram_users_constrain_by_count",
		"grouping" => "instagram-users",
		"type" => "slider",
		"options" => array("range" => "min", "min" => 1, "max" => 25, "step" => 1, "size" => "400px", "unit" => ""),
		"std" => 5),

	array("name" => "User Thumbnail Border",
		"id" => "instagram_user_thumb_border",
		"grouping" => "instagram-users",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "User Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the user thumbnail and its border.",
		"id" => "instagram_user_thumb_padding",
		"grouping" => "instagram-users",
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