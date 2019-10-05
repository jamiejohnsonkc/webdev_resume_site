<?php

/**
 * Template Name: Sandbox.
 */
?>

<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<?php
get_header();
?>

<div class="wrapper" id="full-width-page-wrapper">

    <main class="site-main" id="main">

        <p> MAIN CONTENT</p>
        <a onclick="overlayShow()">show</a>
        <div id="overlay" class="overlay">
            <div class="content">
                <p>SOME OVERLAY INFO</p>
                <a onclick="overlayHide()">hide</a>
            </div>
        </div>

    </main>

</div>
</div>
<?php
get_footer();
?>
