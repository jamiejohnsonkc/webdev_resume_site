<?php
/**
 * glyph to be used in place of the logo on small screens.
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Button to close the overlay navigation -->
<div class="container">
    <?php get_template_part('site_glyph'); ?>
    <a href="javascript:void(0)"
       class="closebtn"
       onclick="closeNav()">&times;</a>
</div>
<!-- Overlay content -->
<div class="overlay__content">

    <div class="overlay__menu">
        <a href="#"><img src="/wp-content/uploads/2019/09/home.svg"
                 class="style-svg icon__overlay-nav"
                 alt="home"><span class="nav-item__overlay">home</span></a>
        <a href="#"><img src="/wp-content/uploads/2019/09/code.svg"
                 class="style-svg icon__overlay-nav"
                 alt="home"><span class="nav-item__overlay">projects</span></a>
        <a href="#"><img src="/wp-content/uploads/2019/09/keyboard.svg"
                 class="style-svg icon__overlay-nav"
                 alt="home"><span class="nav-item__overlay">skills</span></a>
        <a href="#"><img src="/wp-content/uploads/2019/09/briefcase.svg"
                 class="style-svg icon__overlay-nav"
                 alt="home"><span class="nav-item__overlay">priors</span></a>
        <a href="#"><img src="/wp-content/uploads/2019/09/music.svg"
                 class="style-svg icon__overlay-nav"
                 alt="home"><span class="nav-item__overlay">interests</span></a>
        <a href="#"><img src="/wp-content/uploads/2019/09/download.svg"
                 class="style-svg icon__overlay-nav"
                 alt="home"><span class="nav-item__overlay">resume</span></a>
        <a href="#"><img src="/wp-content/uploads/2019/09/at.svg"
                 class="style-svg icon__overlay-nav"
                 alt="home"><span class="nav-item__overlay">contact</span></a>
    </div>
</div>

<div class="overlay__footer">
    <div class="footer__text">
        <div class="footer__head">Jamie Johnson</div>
        <div class="footer__subhead">web development & design</div>
    </div>
    <div class="container__footer-icons">
        <img src="/wp-content/uploads/2019/09/icon__skills-28.svg"
             class="style-svg icon__contact--footer"
             alt="github" />
        <img src="/wp-content/uploads/2019/09/icon__skills-98.svg"
             class="style-svg icon__contact--footer"
             alt="reddit" />
        <img src="/wp-content/uploads/2019/09/icon__skills-24.svg"
             class="style-svg icon__contact--footer"
             alt="linkedin" />
        <img src="/wp-content/uploads/2019/09/icon__skills-83.svg"
             class="style-svg icon__contact--footer"
             alt="facebook" />
    </div>

</div>
