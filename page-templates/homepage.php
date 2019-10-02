<?php

/**
 * Template Name: Homepage.
 */
?>

<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<?php
get_header();
?>
<div id="mobileNav"
     class="overlay">
    <?php get_template_part('mobileOverlay'); ?>
</div>

<div class="navbar__mobile">
    <?php get_template_part('mobileNavBar'); ?>
</div>

<div class="wrapper"
     id="full-width-page-wrapper">

    <main class="site-main"
          id="main">

        <div class="sidebar__container">
            <?php get_sidebar(); ?>
        </div>

        <article>
            <section class="section-container section-container--intro">
                <div class="content content--intro">
                    <h1>Web Development & Design</h1>
                    <h2>Jamie Johnson</h2>
                    <div class="text__contact">15512 W 79th Terrace, Lenexa, ks 66219<br><span>jamie@jamie-johnson.com |
                        913-586-8042</span></div>
                    <p>Will this copy update? Id quis do nostrud laboris exercitation laborum in consequat irure
                        pariatur. Ad velit commodo ut commodo dolor elit officia ex cupidatat non magna.</p>
                    <p>Nostrud commodo proident aliqua laborum duis magna ullamco. Qui proident duis aliqua veniam ea.
                    </p>

                    <img src="/wp-content/uploads/2019/09/icon__skills-28.svg"
                         class="style-svg icon__contact"
                         alt="github" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-98.svg"
                         class="style-svg icon__contact"
                         alt="reddit" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-24.svg"
                         class="style-svg icon__contact"
                         alt="linkedin" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-83.svg"
                         class="style-svg icon__contact"
                         alt="facebook" />
                </div>
            </section>

            <section class="section-container section-container--projects">
                <div class="content content--projects">
                    <h3>projects</h3>

                    <a href="https://jamie-johnson.com">
                        <h4 class="project-name">jamie-johnson.com <br>
                        <span>personal branding site</span></h4>
                    </a>
                    <div class="flex-container">
                        <div class="flex-item project-image">
                            <img src="/wp-content/uploads/2019/09/jjcomscreen.png"
                                 alt="jamie-johnson.com homepage"
                                 class="screengrab screengrab__jjcom">
                            <div class="project-caption"><a
                                   href="https://github.com/jamiejohnsonkc/jamie-johnson.com">github repo</a>
                            </div>
</div>
                            <div class="flex-item project-description">
                                <p>Designed and developed responsive WordPress site with customized theme.</p>
                                <p>PageSpeed 92%, YSlow 86%, full load 2.3s, page size 1.08MB, !important declarations
                                    0.</p>
                                <p>Underway: refactoring. Future: modular reconfiguration.</p>
                            </div>
                        
                    </div>
</div>
            </section>

            <section class="section-container section-container--skills skewed skewed--top skewed--bottom">

                <div class="content content--skills">
                    <h3>skills</h3>

                    <h4>methods</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-88.svg"
                         class="style-svg icon__skills"
                         alt="responsive" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-42.svg"
                         class="style-svg icon__skills"
                         alt="wordpress" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-90.svg"
                         class="style-svg icon__skills"
                         alt="semantic web" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-92.svg"
                         class="style-svg icon__skills"
                         alt="seo" />

                    <h4>frameworks</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-19.svg"
                         class="style-svg icon__skills"
                         alt="bootstrap" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-70.svg"
                         class="style-svg icon__skills"
                         alt="jsnode" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-67.svg"
                         class="style-svg icon__skills"
                         alt="webpack" />

                    <h4>languages</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-15.svg"
                         class="style-svg icon__skills"
                         alt="html" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-14.svg"
                         class="style-svg icon__skills"
                         alt="css" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-46.svg"
                         class="style-svg icon__skills"
                         alt="javascript" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-54.svg"
                         class="style-svg icon__skills"
                         alt="sass" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-49.svg"
                         class="style-svg icon__skills"
                         alt="php" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-48.svg"
                         class="style-svg icon__skills"
                         alt="jquery" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-89.svg"
                         class="style-svg icon__skills"
                         alt="xml" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-51.svg"
                         class="style-svg icon__skills"
                         alt="less" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-16.svg"
                         class="style-svg icon__skills"
                         alt="json" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-17.svg"
                         class="style-svg icon__skills"
                         alt="markdown" />

                    <h4>tools</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-58.svg"
                         class="style-svg icon__skills"
                         alt="gulp" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-28.svg"
                         class="style-svg icon__skills"
                         alt="github" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-52.svg"
                         class="style-svg icon__skills"
                         alt="npm" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-73.svg"
                         class="style-svg icon__skills"
                         alt="yarn" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-55.svg"
                         class="style-svg icon__skills"
                         alt="grunt" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-50.svg"
                         class="style-svg icon__skills"
                         alt="bower" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-86.svg"
                         class="style-svg icon__skills"
                         alt="composer" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-38.svg"
                         class="style-svg icon__skills"
                         alt="vagrant" />

                    <h4>development</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-93.svg"
                         class="style-svg icon__skills"
                         alt="terminal" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-65.svg"
                         class="style-svg icon__skills"
                         alt="local by flywheel" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-34.svg"
                         class="style-svg icon__skills"
                         alt="nginx" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-31.svg"
                         class="style-svg icon__skills"
                         alt="mysql" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-34.svg"
                         class="style-svg icon__skills"
                         alt="apache" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-37.svg"
                         class="style-svg icon__skills"
                         alt="ssh" />

                    <h4>editors</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-42.svg"
                         class="style-svg icon__skills"
                         alt="VScode" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-22.svg"
                         class="style-svg icon__skills"
                         alt="sublime text" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-74.svg"
                         class="style-svg icon__skills"
                         alt="dreamweaver" />

                    <h4>design</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-32.svg"
                         class="style-svg icon__skills"
                         alt="adobe xd" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-68.svg"
                         class="style-svg icon__skills"
                         alt="adobe photoshop" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-44.svg"
                         class="style-svg icon__skills"
                         alt="adobe illustrator" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-71.svg"
                         class="style-svg icon__skills"
                         alt="adobe typekit" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-56.svg"
                         class="style-svg icon__skills"
                         alt="adobe lightroom" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-03.svg"
                         class="style-svg icon__skills"
                         alt="gimp" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-18.svg"
                         class="style-svg icon__skills"
                         alt="inkscape" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-95.svg"
                         class="style-svg icon__skills"
                         alt="ms office" />

                    <h4>operating systems</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-08.svg"
                         class="style-svg icon__skills"
                         alt="windows" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-07.svg"
                         class="style-svg icon__skills"
                         alt="linux" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-06.svg"
                         class="style-svg icon__skills"
                         alt="ios" />

                    <h4>browsers</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-12.svg"
                         class="style-svg icon__skills"
                         alt="chrome" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-84.svg"
                         class="style-svg icon__skills"
                         alt="firefox" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-85.svg"
                         class="style-svg icon__skills"
                         alt="safari" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-87.svg"
                         class="style-svg icon__skills"
                         alt="internet explorer" />

                    <h4>next up</h4>
                    <img src="/wp-content/uploads/2019/09/icon__skills-81.svg"
                         class="style-svg icon__skills"
                         alt="ES6" />
                    <img src="/wp-content/uploads/2019/09/icon__skills-40.svg"
                         class="style-svg icon__skills"
                         alt="react" />

                </div>
            </section>

            <section class="section-container section-container--availability">
                <div class="content content--availability">
                    <h3>availability</h3>
                    <h4>24/7</h4>
                    <p>Okay maybe not 24/7 but this isn't a part time thing. I'm looking to bone up on my digital chops and
                        earn a little
                        green until I can get my own thing up and running</p>
                    <h4>I'm down for anything</h4>
                    <p>Contract. Freelance. Support. Whatever. Send me your cumbersome, tired and menial tasks to free
                        you up for bigger
                        and better things.</p>
            </section>

            <section class="section-container section-container--priors skewed skewed__reverse--both">
                <div class="content content--priors">
                    <h3>prior experience</h3>

                    <h4>agency account services</h4>

                    <p>Bernstein Rein, AdFarm, Nicholson Kovac, Geoff Howe, Mad Dogs & Englishmen, Osborn Barr <br>(16
                        years)</p>

                    <h4>marketing management</h4>

                    <p>Black & Veatch, CreativeOne, Applebee’s International<br>(5 years)</p>
                </div>
            </section>

            <section class="section-container section-container--about">
                <div class="content content--about">
                    <h3>about me</h3>

                    <h4>interests</h4>
                    <p>Music junky. Movie buff. Aspiring photographer. Recovering gamer. Overzealous DIYer. Struggling
                        greens
                        keeper. Learning new things. Anything historical. Proud Dad of two and a very lucky husband.</p>

                    <h4>education</h4>
                    <p>BS, Journalism - University of Kansas</p>

                </div>
            </section>

        </article>
    </main>
    <div class="scroll-top"
         id="scroll-up"
         onclick="topFunction()">
        <a href="/"
           title="home">
            <img src="/wp-content/uploads/2019/09/chevup.svg"
                 alt="scroll up"
                 class="style-svg scrollup"
                 id="scroll-top" /></a></div>
</div>
</div>
<?php get_footer(); ?>
