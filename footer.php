    </main>

    <?php wp_footer(); ?>

    <footer id="footer" class="footer">
        <div class="container"> 
            <div class="footer__top">
                <div class="logo">
                <?php 
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } else {
                    echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
                } ?>
                </div>
                <div class="social">
                    <p class="font_h2">Let’s Hang Out</p>
                    <ul>
                        <li class="facebook">
                            <a href="#" target="_blank"></a>
                        </li>
                        <li class="instagram">
                            <a href="#" target="_blank"></a>
                        </li>
                        <li class="linkedin">
                            <a href="https://www.linkedin.com/in/anahit-sultanova-8323a0a4/" target="_blank"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__bottom">
                <span>Copyright © 2024 The Logo Blog. All Rights Reserved.</span>
            </div>
        </div>
    </footer>