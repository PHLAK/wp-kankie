<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/icons/favicon.ico" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body>
    <div id="pageWrap">
    
        <div id="siteHeader" class="clearfix">
            <a href="<?php echo(bloginfo('url')); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" id="siteTitle" class="left"><?php bloginfo('name'); ?></a>
            <div id="siteTag" class="right"><?php bloginfo('description'); ?></div>
        </div>
        
        <div id="siteNavigationWrap" class="clearfix">
            <?php wp_nav_menu(); ?>
            
            <a href="<?php bloginfo('rss2_url'); ?>" id="feedIcon">&nbsp;</a>
        </div>