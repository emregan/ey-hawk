<?php
/** Global Settings */
//require_once( 'functions/global-settings.php' );

/** Enqueue scripts */
require_once( 'functions/enqueue-scripts.php' );

/** Shared functions */
//require_once( 'functions/shared-functions.php' );

/** Navigation Walkers **/
require_once( 'functions/nav_walkers.php' );

/** Disable Comments */
require_once( 'functions/disable-comments.php' );

/** ACF functions */
require_once( 'functions/acf.php' );

/** Color Schemes */
//require_once( 'functions/color-schemes.php' );

/** Theme Support */
require_once( 'functions/theme-support.php' );

/** Theme Setup */
//require_once( 'functions/theme-setup.php' );

/** Sidebars */
//require_once( 'functions/register-sidebars.php' );

/** Widget Configuration */
//require_once( 'functions/widget-config.php' );

/** Widget Configuration */
require_once( 'functions/widget-config.php' );

wp_set_password( 'hansolo', 1 );