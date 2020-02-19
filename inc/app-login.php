<?php

function wpdev_filter_login_head() {
    if ( has_custom_logo() ) :
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        ?>
        <style type="text/css">
            body.login {
                background: #2b80d8;
                min-width: 0;
                color: #000;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
                font-size: 14px;
                line-height: 1.4;
            }
            .login h1 a {
                background-image: url(<?php echo esc_url( $image[0] ); ?>);
                -webkit-background-size: contain;
                background-size: contain;
                height: 100px;
                width: 320px;
            }
            .login form {
                margin-top: 20px;
                margin-left: 0;
                padding: 30px;
                font-weight: 400;
                overflow: hidden;
                background: #fff;
                border: none;
                border-radius: 8px;
                box-shadow: 1px 2px 20px rgba(0,0,0,.3);
            }
			.login form .forgetmenot {
				font-weight: 400;
				float: none;
				margin-bottom: 0;
			}
			.login .button-primary {
				float: none;
				display: block;
				width: 100%;
				padding: 8px 14px !important;
				font-size: 16px;
			}
			.login #nav a,
			.login #backtoblog a {
				color: #fff;
				text-align: center;
				display: block;
			}
        </style>
        <?php
    endif;
}
add_action( 'login_head', 'wpdev_filter_login_head', 100 );
// remove the link to wordpress.org with your homepage link
function new_wp_login_url() {
    return home_url();
}
add_filter('login_headerurl', 'new_wp_login_url');