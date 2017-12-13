<?php
/**
 * Plugin Name: WP Polylang Remove Ads
 * Description: Plugin which removes ads from free version of Polylang.
 * Version: 1.0.0
 * Plugin URI: https://github.com/devgeniem/wp-polylang-remove-ads
 * Author: Anttoni Lahtinen / Geniem Oy
 * Author URI: https://github.com/devgeniem
 * License: GPLv3
 */

namespace Geniem;

/**
 * Pro version defines this constant so we check if it exists
 * and define it if it doesn't.
 */
if ( ! defined( 'PLL_LINGOTEK_AD' ) )  {
    define( 'PLL_LINGOTEK_AD', false );
}