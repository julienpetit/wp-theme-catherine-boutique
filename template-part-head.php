<?php global $dm_settings; ?>

<header id="header">
    <div class="container">

        <div class="row">


            <?php if ($dm_settings['show_header'] != 0) : ?>

            <div class="col-lg-6 text-center">

                <?php if ( get_header_image() != '' || get_header_textcolor() != 'blank') : ?>

                <?php if ( get_header_image() != '' ) : ?>
                <div class="col-md-12 dmbs-header-img">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
                </div>
            <?php endif; ?>

            <h1 class="<?php if ( get_header_image() != '' ) echo "hidden"; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <h4><?php bloginfo( 'description' ); ?></h4>

        <?php endif; ?>

    </div>

<?php endif; ?>



<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class="col-lg-6 text-center">
        <nav class="navbar navbar-vintage" role="navigation">

            <?php
            wp_nav_menu( array(
                'theme_location'    => 'main_menu',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
        </nav>
    </div>

<?php endif; ?>

</div>

<div class="topwaves"></div>

</div>
</header>
