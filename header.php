<?php
?>
<!DOCTYPE html>
<html class="no-js" <?php // mn_schema(); ?> lang="id-ID" >

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title><?php echo get_the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        <main id="global-site-content">
            <?php
            /**
             * Get template part topbar-mn.php
             */
            get_template_part('includes/elements/topbar', 'mn');
            get_template_part('includes/elements/header', 'mn');
            wp_body_open();
