<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'universal-engine-v5' ); ?></a>
    
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                endif;
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $description; ?></p>
                <?php endif; ?>
            </div>
            
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'universal-engine-v5' ); ?></button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav>
        </header>
        
        <main id="main" class="site-main">
            <?php
            if ( have_posts() ) :
                if ( is_home() && ! is_front_page() ) :
                    ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                    <?php
                endif;
                
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
                
                the_posts_navigation();
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </main>
        
        <footer id="colophon" class="site-footer">
            <div class="site-info">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'universal-engine-v5' ) ); ?>">
                    <?php
                    printf( esc_html__( 'Proudly powered by %s', 'universal-engine-v5' ), 'WordPress' );
                    ?>
                </a>
                <span class="sep"> | </span>
                <?php
                printf( esc_html__( 'Theme: %1$s by %2$s.', 'universal-engine-v5' ), 'Universal Engine V5', '<a href="https://anchor.team.com/">AnchorTeam</a>' );
                ?>
            </div>
        </footer>
    </div>
    
    <?php wp_footer(); ?>
</body>
</html>