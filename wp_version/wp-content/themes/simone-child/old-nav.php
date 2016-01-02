		<nav id="site-navigation" class="main-navigation" role="navigation">
                <h1 class="menu-toggle"><a href="#"><?php _e( 'Menu', 'simone' ); ?></a></h1>


                <!-- Display the 'Font Page Menu' only when on the front page -->
                <?php
                    
                    if ( is_front_page() ) {                                    /* checks to see if this is the front page..*/
                        wp_nav_menu( array( 'menu' => 'Front Page Menu' ) );    /* if this is the front page, set menu to Front Page Menu */           
                    } else {
                        wp_nav_menu( array( 'theme_location' => 'primary' ) );  /* if not, use the primary menu */
                    }
            
                ?>
                        <div class="social-search-wrap">
                            <?php simone_social_menu(); ?>
                            <div class="search-toggle">
                                <i class="fa fa-search"></i>
                                <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'simone' ); ?></a>
                            </div>                            
                        </div>

		</nav><!-- #site-navigation -->