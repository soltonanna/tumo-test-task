    </main>

    <?php wp_footer(); ?>

    <footer id="footer" class="footer">
        <div class="container"> 
            <div class="footer__top">
                <div class="logo">
                    <?php 
                    // if ( function_exists( 'the_custom_logo' ) ) {
                    //     the_custom_logo();
                    // } ?>
                    <a href="<?php echo home_url(); ?>" class="custom-logo-link">
                        <svg width="162" height="69" viewBox="0 0 162 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M135.439 53.25C105.153 56.0032 70.439 59.4167 54.439 63.75C106.939 49.5313 99.228 56.0448 139.939 44.25C159.939 38.4556 145.439 5.25 145.439 5.25C145.439 5.25 177.2 49.4535 135.439 53.25Z" fill="<?php echo esc_attr(get_theme_mod('primary_color', '#4CE0D7'))?>"/>
                        <path d="M23.81 22.985V28.133H17.606V46.25H11.138V28.133H5V22.985H23.81Z" fill="#262626"/>
                        <path d="M38.38 27.572C40.492 27.572 42.164 28.287 43.396 29.717C44.65 31.125 45.277 33.039 45.277 35.459V46.25H38.809V36.317C38.809 35.261 38.534 34.436 37.984 33.842C37.434 33.226 36.697 32.918 35.773 32.918C34.805 32.918 34.046 33.226 33.496 33.842C32.946 34.436 32.671 35.261 32.671 36.317V46.25H26.203V21.83H32.671V30.377C33.243 29.541 34.013 28.87 34.981 28.364C35.971 27.836 37.104 27.572 38.38 27.572Z" fill="#262626"/>
                        <path d="M66.5141 36.779C66.5141 37.285 66.4811 37.791 66.4151 38.297H54.1721C54.2381 39.309 54.5131 40.068 54.9971 40.574C55.5031 41.058 56.1411 41.3 56.9111 41.3C57.9891 41.3 58.7591 40.816 59.2211 39.848H66.1181C65.8321 41.124 65.2711 42.268 64.4351 43.28C63.6211 44.27 62.5871 45.051 61.3331 45.623C60.0791 46.195 58.6931 46.481 57.1751 46.481C55.3491 46.481 53.7211 46.096 52.2911 45.326C50.8831 44.556 49.7721 43.456 48.9581 42.026C48.1661 40.596 47.7701 38.913 47.7701 36.977C47.7701 35.041 48.1661 33.369 48.9581 31.961C49.7501 30.531 50.8501 29.431 52.2581 28.661C53.6881 27.891 55.3271 27.506 57.1751 27.506C59.0011 27.506 60.6181 27.88 62.0261 28.628C63.4341 29.376 64.5341 30.454 65.3261 31.862C66.1181 33.248 66.5141 34.887 66.5141 36.779ZM59.9141 35.162C59.9141 34.37 59.6501 33.754 59.1221 33.314C58.5941 32.852 57.9341 32.621 57.1421 32.621C56.3501 32.621 55.7011 32.841 55.1951 33.281C54.6891 33.699 54.3591 34.326 54.2051 35.162H59.9141Z" fill="#262626"/>
                        <path d="M75.629 41.3H82.856V46.25H69.161V22.985H75.629V41.3Z" fill="#262626"/>
                        <path d="M93.984 46.481C92.136 46.481 90.475 46.096 89.001 45.326C87.549 44.556 86.405 43.456 85.569 42.026C84.733 40.596 84.315 38.913 84.315 36.977C84.315 35.063 84.733 33.391 85.569 31.961C86.427 30.531 87.582 29.431 89.034 28.661C90.508 27.891 92.169 27.506 94.017 27.506C95.865 27.506 97.515 27.891 98.967 28.661C100.441 29.431 101.596 30.531 102.432 31.961C103.29 33.391 103.719 35.063 103.719 36.977C103.719 38.891 103.29 40.574 102.432 42.026C101.596 43.456 100.441 44.556 98.967 45.326C97.493 46.096 95.832 46.481 93.984 46.481ZM93.984 40.871C94.886 40.871 95.634 40.541 96.228 39.881C96.844 39.199 97.152 38.231 97.152 36.977C97.152 35.723 96.844 34.766 96.228 34.106C95.634 33.446 94.897 33.116 94.017 33.116C93.137 33.116 92.4 33.446 91.806 34.106C91.212 34.766 90.915 35.723 90.915 36.977C90.915 38.253 91.201 39.221 91.773 39.881C92.345 40.541 93.082 40.871 93.984 40.871Z" fill="#262626"/>
                        <path d="M113.181 27.506C114.435 27.506 115.524 27.759 116.448 28.265C117.394 28.771 118.12 29.453 118.626 30.311V27.737H125.094V46.052C125.094 47.79 124.764 49.352 124.104 50.738C123.444 52.146 122.41 53.268 121.002 54.104C119.616 54.94 117.856 55.358 115.722 55.358C112.862 55.358 110.574 54.687 108.858 53.345C107.142 52.003 106.163 50.177 105.921 47.867H112.29C112.422 48.461 112.752 48.923 113.28 49.253C113.808 49.583 114.49 49.748 115.326 49.748C117.526 49.748 118.626 48.516 118.626 46.052V43.676C118.12 44.534 117.394 45.216 116.448 45.722C115.524 46.228 114.435 46.481 113.181 46.481C111.707 46.481 110.365 46.096 109.155 45.326C107.967 44.556 107.021 43.456 106.317 42.026C105.635 40.574 105.294 38.891 105.294 36.977C105.294 35.063 105.635 33.391 106.317 31.961C107.021 30.531 107.967 29.431 109.155 28.661C110.365 27.891 111.707 27.506 113.181 27.506ZM118.626 36.977C118.626 35.789 118.296 34.854 117.636 34.172C116.998 33.49 116.206 33.149 115.26 33.149C114.292 33.149 113.489 33.49 112.851 34.172C112.213 34.832 111.894 35.767 111.894 36.977C111.894 38.165 112.213 39.111 112.851 39.815C113.489 40.497 114.292 40.838 115.26 40.838C116.206 40.838 116.998 40.497 117.636 39.815C118.296 39.133 118.626 38.187 118.626 36.977Z" fill="#262626"/>
                        <path d="M137.393 46.481C135.545 46.481 133.884 46.096 132.41 45.326C130.958 44.556 129.814 43.456 128.978 42.026C128.142 40.596 127.724 38.913 127.724 36.977C127.724 35.063 128.142 33.391 128.978 31.961C129.836 30.531 130.991 29.431 132.443 28.661C133.917 27.891 135.578 27.506 137.426 27.506C139.274 27.506 140.924 27.891 142.376 28.661C143.85 29.431 145.005 30.531 145.841 31.961C146.699 33.391 147.128 35.063 147.128 36.977C147.128 38.891 146.699 40.574 145.841 42.026C145.005 43.456 143.85 44.556 142.376 45.326C140.902 46.096 139.241 46.481 137.393 46.481ZM137.393 40.871C138.295 40.871 139.043 40.541 139.637 39.881C140.253 39.199 140.561 38.231 140.561 36.977C140.561 35.723 140.253 34.766 139.637 34.106C139.043 33.446 138.306 33.116 137.426 33.116C136.546 33.116 135.809 33.446 135.215 34.106C134.621 34.766 134.324 35.723 134.324 36.977C134.324 38.253 134.61 39.221 135.182 39.881C135.754 40.541 136.491 40.871 137.393 40.871Z" fill="#262626"/>
                        </svg>

                    </a>
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