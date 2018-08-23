<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php the_title()?></title>
<!--    --><?php // include('phpstyle.php'); ?>
    <?php wp_head()?>
    
</head>
<body>
<!--header-->
<header>
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light white-bg">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/brad-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="">
                        <a class="nav-link" href="<?php echo esc_url( home_url( '/about' ) ); ?>">about</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo esc_url( get_page_link( 11 ) ); ?>">portfolio</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo esc_url( home_url( '/media' ) ); ?>">media</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>