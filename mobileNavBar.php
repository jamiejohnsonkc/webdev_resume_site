<?php
/**
 * glyph to be used in place of the logo on small screens.
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}
?>

<?php get_template_part('site_glyph'); ?>

<button class="navbar-toggler" id="overlay-toggle" type="button" onclick="openNav()" aria-controls="mobileNav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
<span class="navbar-toggler-icon"></span>
</button>