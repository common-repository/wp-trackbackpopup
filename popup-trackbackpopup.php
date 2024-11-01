<?php
include('../../../wp-blog-header.php');

global $wp_query;

$p = $_GET['p'];
$page_id = $_GET['page_id'];

if($p) {
	query_posts('p='.$p);
} elseif ($page_id) {
	query_posts('page_id='.$page_id);
}
$mainStylesheet = $wptp->settings["wptp-mainStylesheet"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<title>Trackback for &ldquo;<?php wp_title(''); ?>&rdquo;</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="robots" content="noindex,nofollow" />
<?php if($mainStylesheet == TRUE) { ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php } else { ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo WP_PLUGIN_URL;?>/wp-trackbackpopup/trackbackpopup.css" />
<?php } ?>
</head>

<body>
<div id="trackbackPopup">
<?php
if(is_single() || is_page()) {
	if(have_posts()) {
		the_post();

$curauth = $wp_query->get_queried_object();
$authorName = $curauth->display_name;
$postTitle = get_the_title();
$postBlogName = get_bloginfo('name');
$year = date('Y');
$patterns= array('/%post-title%/', '/%blog-name%/', '/%author-name%/', '/%year%/');
$replacements = array($postTitle, $postBlogName, $authorName, $year);
$pretext = preg_replace($patterns, $replacements, trim($wptp->settings["wptp-pretext"]));
$posttext = preg_replace($patterns, $replacements, trim($wptp->settings["wptp-posttext"]));
?>
	<p id="trackbackPretext"><?php echo $pretext; ?></p>
	<p id="trackbackURL"><?php trackback_url('url'); ?></p>
	<p id="trackbackPosttext"><?php echo $posttext; ?></p>
<?php
	} else {
?>
	<p>The article ID provided is not valid.</p>
<?php
	}
} else {
?>
	<p>An article ID must be provided.</p>
<?php } ?>
</div>
</body>
</html>