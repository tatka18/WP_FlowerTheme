<?php get_header(); ?>
<!-- Content
============================================= -->
<section id="content" class="">

    <!-- Post Content
    ============================================= -->

    <!-- Posts
    ============================================= -->
    <div id="posts">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                if (is_sticky()) {
                    get_template_part('partials/post/sticky-post');
                }
            }
            ?>

            <div class="non-sticky-posts-container common-container">
                <div class="non-sticky-posts-grid">
                    <?php
                    while (have_posts()) {
                        the_post();
                        if (!is_sticky()) {
                            get_template_part('partials/post/content-excerpt');
                        }
                    }
                    ?>
                </div>
            </div>

            <?php
        }
        ?>

    </div><!-- #posts end -->

    <!-- Pagination
    ============================================= -->

    <div class="common-container ">
        <div class="posts-link-button-content">
            <div class="posts-link-button">
                <?php
                next_posts_link('&larr; Older');
                ?>
            </div>
            <div class="posts-link-button">
                <?php
                previous_posts_link('Newer &rarr;');
                ?>
            </div>
        </div>
    </div>
    <!-- #pager end -->

    <!--ADS-->
    <div class="ads-container">

        <?php
        if (function_exists('quads_ad')) {
            echo quads_ad([
                'location' => 'yasik_custom'
            ]);
        }
        ?>

        <?php echo do_shortcode('[quads id=2]'); ?>
    </div>
    <!-- #ads end-->

    <!-- .postcontent end -->

</section><!-- #content end -->


<?php get_footer(); ?>

