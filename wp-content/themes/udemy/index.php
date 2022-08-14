<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- set the languafe to match the one on my Wordpress site -->
<head>
    <meta charset="<?php bloginfo('charset');?>"> <!-- charset - will be configured as UTF-8 -->
    <?php wp_head();?> <!-- Inject head tag -->
</head>

<body <?php body_class('example');?>> <!-- add "example" class to body tag -->
    <?php wp_body_open();?> <!-- load content at the begining of the page -->
    <!--<p>hello</p>-->
    <?php wp_footer();?> <!-- Inject footer tag, load content at the end of the page -->
</body>
</html>