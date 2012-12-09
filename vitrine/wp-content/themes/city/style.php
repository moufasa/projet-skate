<!-- Style CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid/main.css" />

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Mate+SC' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Marvel' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Cabin:400italic' rel='stylesheet'>

<link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/css/style/style.css">
<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'theme_style_sellect') ) : ?>
<link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/css/color/<?php get_option_tree( 'theme_style_sellect', '', 'true' ); ?>.css">
<?php else : ?>
<link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/css/color/default.css">
<?php endif; endif; ?>
<link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/css/app/supersized.css">
<link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/css/app/hover_effects.css">
<link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox-1.3.4.css">

<!--[if lt IE 10]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app/hover_effects_ie.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style/ie9.css" type="text/css" media="screen" />
<![endif]-->

<style>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'generalback') ) : ?>
body {background-color:<?php get_option_tree( 'generalback', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'pageback', true) ) : ?>

#pageback
{ background:url(<?php echo get_post_meta($post->ID, "pageback", $single = true); ?>) no-repeat top center; position:absolute; left:0; top:0; width:100%; height:234px; z-index:-10; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}

<?php else : ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'theme_style_background') ) : ?>
/* Page Back */
#pageback
{ background:url(<?php get_option_tree( 'theme_style_background', '', 'true' ); ?>) no-repeat <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'theme_style_background_repeat') ) : ?> <?php get_option_tree( 'theme_style_background_repeat', '', 'true' ); ?> <?php else : ?> top center <?php endif; endif; ?>; position:absolute; left:0; top:0; width:100%; height:234px; z-index:-10; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
<?php else : ?>
/* Page Back */
#pageback
{ background:url(<?php echo get_template_directory_uri(); ?>/image/wall/01.jpg) no-repeat top center; position:absolute; left:0; top:0; width:100%; height:234px; z-index:-10; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
<?php endif; endif; ?>

<?php endif; endif; ?>

<?php if ( function_exists( 'get_post_meta') ) : if( get_post_meta($post->ID, 'postback', true) ) : ?>
#postback
{ background:url(<?php echo get_post_meta($post->ID, "postback", $single = true); ?>) no-repeat top center; position:absolute; left:0; top:0; width:100%; height:234px; z-index:-10; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}

<?php else : ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'theme_style_background') ) : ?>
/* Page Back */
#postback
{ background:url(<?php get_option_tree( 'theme_style_background', '', 'true' ); ?>) no-repeat <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'theme_style_background_repeat') ) : ?> <?php get_option_tree( 'theme_style_background_repeat', '', 'true' ); ?> <?php else : ?> top center <?php endif; endif; ?>; position:absolute; left:0; top:0; width:100%; height:234px; z-index:-10; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
<?php else : ?>
/* Page Back */
#postback
{ background:url(<?php echo get_template_directory_uri(); ?>/image/wall/01.jpg) no-repeat top center; position:absolute; left:0; top:0; width:100%; height:234px; z-index:-10; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
<?php endif; endif; ?>

<?php endif; endif; ?>
</style>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fontstyle1') ) : ?>
<link href='http://fonts.googleapis.com/css?family=Federo|Jockey+One|News+Cycle|Quicksand|Antic|Anton|Syncopate|Ruluko|Jura|Asul|Marvel|Open+Sans|Amaranth|Allerta+Stencil|Rosario' rel='stylesheet' type='text/css'>
<style>
ul#menu a,ul#menu a.pressed, ul#menu ul a, ul#menu ul li:hover>a,ul#menu ul li>a.pressed, #slidecaption h2, .tabbutton1 h1, .tabbutton2 h1, .tabbutton3 h1, .columb-post h1, .homepage-team h1, div.p_table h2, .leftcloumb-list ul li h1, .bussiness-boss h1, .bloglisting h2, .bigtitle h2, .bloglisting2 h2, .single-post h1, .single-post h2, .single-post h3, .single-post h4, .single-post h5, .single-post h6, .portfoliowork ul li h1, div.p_table, .wp-pagenavi .current
{font-family: '<?php get_option_tree( 'fontstyle1', '', 'true' ); ?>', sans-serif; font-weight:normal;}
</style>
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fontstyle2') ) : ?>
<link href='http://fonts.googleapis.com/css?family=Bitter|Holtwood+One+SC|Josefin+Slab|Esteban|Copse|Rokkitt|Tinos|Mate+SC|Almendra|Almendra+SC|Fjord+One|Vidaloka|Arapey|Ultra|Merriweather' rel='stylesheet' type='text/css'>
<style>
#slidecaption h1, #team h5, .bigtitle h1
{font-family: '<?php get_option_tree( 'fontstyle2', '', 'true' ); ?>', serif; font-weight:normal;}
</style>
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fontstyle3') ) : ?>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans|PT+Sans|Rationale|Antic|Abel|Syncopate|Varela+Round|Marmelad|Shanti|Geo|Yanone+Kaffeesatz|Jura|Ruluko|Basic|Electrolize|Marvel|Terminal+Dosis|Open+Sans+Condensed:300|Play|Didact+Gothic' rel='stylesheet' type='text/css'>
<style>
.tabbutton1 p, .tabbutton2 p, .tabbutton3 p, .footercategories h2, .footerportfolio h2, .footersocial h2, .popupcontact h2, .bloglisting h1, .bloglisting2 h1, .sidebar-categories h2, .sidebar-tags h2, div.p_table h1 span
{font-family: '<?php get_option_tree( 'fontstyle3', '', 'true' ); ?>', sans-serif; font-weight:normal;}
</style>
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fontstyle4') ) : ?>
<link href='http://fonts.googleapis.com/css?family=Federo|Jockey+One|News+Cycle|Quicksand|Antic|Anton|Syncopate|Ruluko|Jura|Asul|Marvel|Open+Sans|Amaranth|Allerta+Stencil|Rosario' rel='stylesheet' type='text/css'>
<style>
.minibutton, .nofound h1,  .comment-reply-link,  .minibutton2, .middlebutton, .popupcontact input[type="submit"], .minibutton-black, .comment-form input[type="submit"], .filter ul li a, .wp-pagenavi .current
{font-family: '<?php get_option_tree( 'fontstyle4', '', 'true' ); ?>', sans-serif;}
</style>
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fontstyle5') ) : ?>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans|PT+Sans|Rationale|Antic|Abel|Syncopate|Varela+Round|Marmelad|Shanti|Geo|Yanone+Kaffeesatz|Jura|Ruluko|Basic|Electrolize|Marvel|Terminal+Dosis|Open+Sans+Condensed:300|Play|Didact+Gothic' rel='stylesheet' type='text/css'>
<style>
.home-team ul li h1, .title-2cloumb h1, #topmenu ul li input[type="text"], .comment-form input[type="text"], .comment-form textarea, div.p_table h2
{font-family: '<?php get_option_tree( 'fontstyle5', '', 'true' ); ?>', sans-serif;}
</style>
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fontstyle6') ) : ?>
<link href='http://fonts.googleapis.com/css?family=Federo|Jockey+One|News+Cycle|Quicksand|Antic|Anton|Syncopate|Ruluko|Jura|Asul|Marvel|Open+Sans|Amaranth|Allerta+Stencil|Rosario' rel='stylesheet' type='text/css'>
<style>
.advert h1, .nofound h1,  .title-2cloumb p, div.p_table h1
{font-family: '<?php get_option_tree( 'fontstyle6', '', 'true' ); ?>', sans-serif;}
</style>
<?php else : ?>
<?php endif; endif; ?>

<style>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color1') ) : ?>
.wp-pagenavi .page
{color:<?php get_option_tree( 'color1', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>


<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color2') ) : ?>
p, .sidebar-categories ul li a, .sidebar-tags ul a, .single-post ul li,  .single-post ol li
{ color:<?php get_option_tree( 'color2', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>


<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color3') ) : ?>
.advert h1, .nofound h1,  .popupcontact input[type="text"], .popupcontact textarea, .bloglist-date h1, .bloglist-date h2, .minibutton:hover, .minibutton2:hover, .middlebutton:hover, .sidebar-tags ul a:hover, .bigtitle h1, .minibutton-black:hover, .comment-form input[type="text"]:focus, .comment-form textarea:focus, .comment-form input[type="submit"], .filter ul li a, div.p_table a.sign_up, div.p_table h1 span, div.p_table h2.caption span, .wp-pagenavi .current
{color:<?php get_option_tree( 'color3', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color4') ) : ?>
.leftcloumb-list ul li h1, .bussiness-boss h1, a:hover
{ color:<?php get_option_tree( 'color4', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color5') ) : ?>
.title-2cloumb h1
{ color:<?php get_option_tree( 'color5', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color6') ) : ?>
.homepage-team h1, div.p_table h2, .footercategories ul li a:hover, .footerregister p a:hover, .popupcontact h2, a, .sidebar-categories ul li a:hover
{color:<?php get_option_tree( 'color6', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color7') ) : ?>
ul#menu a,ul#menu a.pressed, ul#menu ul a, ul#menu a, .home-team-bottom h1, .footerregister p a
{color:<?php get_option_tree( 'color7', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color8') ) : ?>
ul#menu li:hover>a,ul#menu li>a.pressed, ul#menu ul li:hover>a,ul#menu ul li>a.pressed, .minibutton, .nofound h1,  .comment-reply-link,  .minibutton2, .middlebutton, .popupcontact input[type="submit"], .minibutton-black
{color:<?php get_option_tree( 'color8', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color9') ) : ?>
#slidecaption h2, .tabs li a.selected, .tabs li a, .columb-post h1 a, .portfoliowork ul li h1 a
{color:<?php get_option_tree( 'color9', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color10') ) : ?>
.tabs li a:hover, .columb-post h1 a:hover, .columb-post h1 a:hover, .portfoliowork ul li h1 a:hover
{color:<?php get_option_tree( 'color10', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color11') ) : ?>
.footercategories h2, .footerportfolio h2, .footersocial h2, .bigtitle h2
{color:<?php get_option_tree( 'color11', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'color12') ) : ?>
.footercategories p, .footercategories ul li a, .footerportfolio p, .footersocial p, .footerregister p, .sidebar-categories h2, .sidebar-tags h2
{color:<?php get_option_tree( 'color12', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'colorset1') ) : ?>
/* Bacground Color */
ul#menu, ul#menu a, #topdot, #tabback, #tabback3, #tabmenuback, #tabmenuback3, #tabmenuback2, ul#slide-list li a, #prevslide, #nextslide, .tabbutton2, .tabbutton1, .tabbutton3, .footertwitter, #footer2-back, .popupcontact input[type="text"], .popupcontact textarea, #tabback2, .bloglist-date, .sidebar-tags ul a:hover
{background-color:<?php get_option_tree( 'colorset1', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'colorset2') ) : ?>
ul#menu ul, ul#menu li ul li a, ul#menu li:hover>a,ul#menu li>a.pressed, ul#menu ul li:hover>a,ul#menu ul li>a.pressed, .tabs li a.selected, .overlay_join .join_black, .columb-post h1 a, #footer1-back, #topmenu, .portfoliowork ul li h1 a
{background-color:<?php get_option_tree( 'colorset2', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'colorset3') ) : ?>
#progress-bar, #prevslide:hover, #nextslide:hover, .tabs li a:hover, .columb-post h1 a:hover, #topmenu ul li input[type="text"]:focus, .popupcontact input[type="text"]:focus, .popupcontact textarea:focus, .bloglist-nav, .bloglist-nav2, .comment-form input[type="text"]:focus, .comment-form textarea:focus, .portfoliowork ul li h1 a:hover
{background-color:<?php get_option_tree( 'colorset3', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'colorset4') ) : ?>
#topmenu ul li input[type="text"], .comment-form input[type="text"], .comment-form textarea
{background-color:<?php get_option_tree( 'colorset4', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'colorset5') ) : ?>
#full-bottom, #full-bottom2, .sidebar-tags ul a
{background-color:<?php get_option_tree( 'colorset5', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>


/* Border Color */
<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset1') ) : ?>
.blog-list
{border-right: 1px solid <?php get_option_tree( 'bordercolorset1', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset1') ) : ?>
.blog-list2
{border-left: 1px solid <?php get_option_tree( 'bordercolorset1', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset1') ) : ?>
.bloglisting, .sidebar-categories ul li a, .single-post ul li, .single-post ol li
{border-bottom: 1px solid <?php get_option_tree( 'bordercolorset1', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset2') ) : ?>
ul#menu li:first-child, ul#menu li, ul#menu li:hover, .tabbutton1, .tabbutton2, .footercategories, .footerportfolio, #topmenu ul li
{border-right: 1px solid <?php get_option_tree( 'bordercolorset2', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset3') ) : ?>
ul#menu li, ul#menu li:hover, ul#menu li:last-child, .tabbutton2, .tabbutton3, .footerportfolio, .footersocial, #topmenu ul li
{border-left: 1px solid <?php get_option_tree( 'bordercolorset3', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset3') ) : ?>
.footercategories ul li a, .footerothermedia
{border-top: 1px solid <?php get_option_tree( 'bordercolorset3', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset2') ) : ?>
.footercategories ul li a, .twittermessage
{border-bottom: 1px solid <?php get_option_tree( 'bordercolorset2', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset4') ) : ?>
.footercategories ul li a:hover, .popupcontact h2, .sidebar-categories ul li a:hover
{border-bottom: 1px solid <?php get_option_tree( 'bordercolorset4', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset3') ) : ?>
ul#menu li ul li, ul#menu li ul li:first-child
{border-bottom: 1px solid <?php get_option_tree( 'bordercolorset3', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset4') ) : ?>
.corner_ribbon .corner_ribbon_top_left_black
{border-top: 60px solid <?php get_option_tree( 'bordercolorset4', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset4') ) : ?>
.home-team-bottom
{border-top: 1px solid <?php get_option_tree( 'bordercolorset4', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'bordercolorset5') ) : ?>
.leftcloumb-list ul li
{ border-bottom:1px solid <?php get_option_tree( 'bordercolorset5', '', 'true' ); ?>;}
<?php else : ?>
<?php endif; endif; ?>


<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'textshadow') ) : ?>
ul#menu li a, .tabbutton1 h1, .tabbutton2 h1, .tabbutton3 h1, .tabbutton1 p, .tabbutton2 p, .tabbutton3 p, .minibutton, .nofound h1,  .comment-reply-link,  .minibutton2, .popupcontact input[type="submit"], .footercategories h2, .footerportfolio h2, .footersocial h2, .middlebutton, .bigtitle h1, .minibutton-black, .filter ul li a, div.p_table a.sign_up, .wp-pagenavi .current
{text-shadow: -1px -1px 0px <?php get_option_tree( 'textshadow', '', 'true' ); ?>;filter: dropshadow(color=<?php get_option_tree( 'textshadow', '', 'true' ); ?>, offx=-1, offy=-1);}

.minibutton:hover, .advert h1, .nofound h1,  .middlebutton:hover, .bigtitle h2, .minibutton-black:hover, .filter ul li a:hover
{text-shadow: 1px 1px 0px <?php get_option_tree( 'textshadow', '', 'true' ); ?>;filter: dropshadow(color=<?php get_option_tree( 'textshadow', '', 'true' ); ?>, offx=-1, offy=-1);}

#slidecaption h1, #slidecaption h2
{text-shadow: 2px 2px 2px <?php get_option_tree( 'textshadow', '', 'true' ); ?>;filter: dropshadow(color=<?php get_option_tree( 'textshadow', '', 'true' ); ?>, offx=2, offy=2);}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'tabgradident1') ) : ?>
/* Tab Gradident*/
<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'tabgradident2') ) : ?>
#tab-gradident, div.p_table li.footer_row {background: <?php get_option_tree( 'tabgradident1', '', 'true' ); ?>; /* Old browsers */
background: -moz-linear-gradient(top, <?php get_option_tree( 'tabgradident1', '', 'true' ); ?> 0%, <?php get_option_tree( 'tabgradident2', '', 'true' ); ?> 99%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php get_option_tree( 'tabgradident1', '', 'true' ); ?>), color-stop(99%,<?php get_option_tree( 'tabgradident2', '', 'true' ); ?>)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, <?php get_option_tree( 'tabgradident1', '', 'true' ); ?> 0%,<?php get_option_tree( 'tabgradident2', '', 'true' ); ?> 99%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, <?php get_option_tree( 'tabgradident1', '', 'true' ); ?> 0%,<?php get_option_tree( 'tabgradident2', '', 'true' ); ?> 99%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, <?php get_option_tree( 'tabgradident1', '', 'true' ); ?> 0%,<?php get_option_tree( 'tabgradident2', '', 'true' ); ?> 99%); /* IE10+ */
background: linear-gradient(top, <?php get_option_tree( 'tabgradident1', '', 'true' ); ?> 0%,<?php get_option_tree( 'tabgradident2', '', 'true' ); ?> 99%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php get_option_tree( 'tabgradident1', '', 'true' ); ?>', endColorstr='<?php get_option_tree( 'tabgradident2', '', 'true' ); ?>',GradientType=0 ); /* IE6-9 */}
<?php else : ?>
<?php endif; endif; ?>
/* Tab Gradident*/
<?php else : ?>
<?php endif; endif; ?>


<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'advertgradident1') ) : ?>
#advertback 
{background: <?php get_option_tree( 'advertgradident1', '', 'true' ); ?>; /* Old browsers */
background: -moz-linear-gradient(top, <?php get_option_tree( 'advertgradident1', '', 'true' ); ?> 4%, <?php get_option_tree( 'advertgradident2', '', 'true' ); ?> 12%, <?php get_option_tree( 'advertgradident3', '', 'true' ); ?> 98%, <?php get_option_tree( 'advertgradident4', '', 'true' ); ?> 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(4%,<?php get_option_tree( 'advertgradident1', '', 'true' ); ?>), color-stop(12%,<?php get_option_tree( 'advertgradident2', '', 'true' ); ?>), color-stop(98%,<?php get_option_tree( 'advertgradident3', '', 'true' ); ?>), color-stop(100%,<?php get_option_tree( 'advertgradident4', '', 'true' ); ?>)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, <?php get_option_tree( 'advertgradident1', '', 'true' ); ?> 4%,<?php get_option_tree( 'advertgradident2', '', 'true' ); ?> 12%,<?php get_option_tree( 'advertgradident3', '', 'true' ); ?> 98%,<?php get_option_tree( 'advertgradident4', '', 'true' ); ?> 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, <?php get_option_tree( 'advertgradident1', '', 'true' ); ?> 4%,<?php get_option_tree( 'advertgradident2', '', 'true' ); ?> 12%,<?php get_option_tree( 'advertgradident3', '', 'true' ); ?> 98%,<?php get_option_tree( 'advertgradident4', '', 'true' ); ?> 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, <?php get_option_tree( 'advertgradident1', '', 'true' ); ?> 4%,<?php get_option_tree( 'advertgradident2', '', 'true' ); ?> 12%,<?php get_option_tree( 'advertgradident3', '', 'true' ); ?> 98%,<?php get_option_tree( 'advertgradident4', '', 'true' ); ?> 100%); /* IE10+ */
background: linear-gradient(top, <?php get_option_tree( 'advertgradident1', '', 'true' ); ?> 4%,<?php get_option_tree( 'advertgradident2', '', 'true' ); ?> 12%,<?php get_option_tree( 'advertgradident3', '', 'true' ); ?> 98%,<?php get_option_tree( 'advertgradident4', '', 'true' ); ?> 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php get_option_tree( 'advertgradident1', '', 'true' ); ?>', endColorstr='<?php get_option_tree( 'advertgradident4', '', 'true' ); ?>',GradientType=0 ); /* IE6-9 */}
<?php else : ?>
<?php endif; endif; ?>

<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'buttonback1') ) : ?>
/* Button Bacground */
.minibutton, .nofound h1,  .comment-reply-link,  .minibutton2, .middlebutton, .popupcontact input[type="submit"], .filter .current a, .filter .current a:visited, div.p_table a.sign_up, .wp-pagenavi .page
{
border:1px solid <?php get_option_tree( 'buttonback1', '', 'true' ); ?>;
background: <?php get_option_tree( 'buttonback2', '', 'true' ); ?>; /* Old browsers */
background: -moz-linear-gradient(top, #ffffff 0%, <?php get_option_tree( 'buttonback3', '', 'true' ); ?> 2%, <?php get_option_tree( 'buttonback2', '', 'true' ); ?> 98%, #000000 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(2%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?>), color-stop(98%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?>), color-stop(100%,#000000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #ffffff 0%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?> 2%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?> 98%,#000000 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #ffffff 0%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?> 2%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?> 98%,#000000 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #ffffff 0%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?> 2%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?> 98%,#000000 100%); /* IE10+ */
background: linear-gradient(top, #ffffff 0%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?> 2%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?> 98%,#000000 100%); /* W3C */
}

.minibutton:hover, .minibutton2:hover, .middlebutton:hover, .popupcontact input[type="submit"]:hover, div.p_table a.sign_up:hover, .wp-pagenavi .page:hover
{
border:1px solid <?php get_option_tree( 'buttonback1', '', 'true' ); ?>;
background: <?php get_option_tree( 'buttonback1', '', 'true' ); ?>; /* Old browsers */
background: -moz-linear-gradient(top, #000000 0%, <?php get_option_tree( 'buttonback2', '', 'true' ); ?> 2%, <?php get_option_tree( 'buttonback3', '', 'true' ); ?> 99%, #ffffff 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#000000), color-stop(2%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?>), color-stop(99%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?>), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #000000 0%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?> 2%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?> 99%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #000000 0%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?> 2%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?> 99%,#ffffff 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #000000 0%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?> 2%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?> 99%,#ffffff 100%); /* IE10+ */
background: linear-gradient(top, #000000 0%,<?php get_option_tree( 'buttonback2', '', 'true' ); ?> 2%,<?php get_option_tree( 'buttonback3', '', 'true' ); ?> 99%,#ffffff 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
}
<?php else : ?>
<?php endif; endif; ?>

</style>