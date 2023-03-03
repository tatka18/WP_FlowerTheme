<?php

/*
 * Template Name: Customized Post
 * Template Post Type: Post
 */

get_header(); ?>

    <!-- Content
    ============================================= -->
    <section id="content" class="common-container">

        <div style="display: flex; justify-content: space-between">

            <div>
                <h3 style="color: red"> Hello, this is Customized Page!!!</h3>

            </div>

        </div>

    </section>
    <!-- #content end -->

    <div class="custom-post-container common-container">
        <!--    <div class="items">-->

        <!--        <div class="common-container">-->
        <!-- Post Content
        ============================================= -->
        <div class="single-content-article items">

            <?php
            if (have_posts()) {
            while (have_posts()) {
            the_post();

            global $post;
            $author_ID = $post->post_author;
            $author_URL = get_author_posts_url($author_ID);
            ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>

                <!-- Single Post
                              ============================================= -->

                <!-- Entry Title
                                ============================================= -->
                <div class="entry-title">
                    <h1><?php the_title(); ?></h1>
                </div><!-- .entry-title end -->


                <div class="content-above-image">
                    <?php
                    get_template_part('partials/tmp/author-image-name-date');
                    ?>
                </div>

                <!-- Entry Content
                                ============================================= -->
                <div class="entry-content">

                    <?php
                    the_content();

                    $defaults = [
                        'before' => '<p class="text-content">' . __('Pages: ', 'yasik'),
                        //перемещает текст пагинации в центр блока
                        'after' => '</p>'
                    ];

                    wp_link_pages($defaults); //включает пагинацию
                    ?>
                    <!-- Post Single - Content End -->


                </div><!-- .entry end -->

                <?php
                }
                }
                ?>
            </div><!-- .postcontent end -->
        </div>
        <!--        </div>-->

        <!------------------Related Posts-------->
        <div class="related-posts-container">

            <h3 class="related-posts-title">
                    <span class="rp-title">
                        You'll might like these too:
                    </span>
                <span class="double-lines"></span>
            </h3>

            <div class="related-posts-items ">

                <?php
                $categories = get_post();
                $rp_query = new WP_Query([
                    'posts_per_page' => 4,
                    'post_status' => 'publish'
                ]);

                if ($rp_query->have_posts()) {
                    while ($rp_query->have_posts()) {
                        $rp_query->the_post();
                        ?>

                        <div class="related-post-container">
                            <div class="related-post">

                                <div class="related-post-image">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        ?>

                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        </a>

                                        <?php
                                    }
                                    ?>
                                </div>

                                <div class="related-post-title-container">
                                    <h4 class="related-post-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                </div>

                            </div>

                        </div>

                        <?php
                    }
                    wp_reset_postdata();
                }

                ?>

            </div>

        </div>

        <!--related Posts end-------->
        <!-- Post Navigation
              ============================================= -->
        <!--                            настройка блока навигации по постам-->
        <div class="posts-navigation-container">

            <div class="posts-navigation">
                <?php
                previous_post_link();
                ?>
            </div>

            <div class="posts-navigation">
                <?php
                next_post_link();
                ?>
            </div>

        </div><!-- .post-navigation end -->

    </div>


<?php get_footer(); ?>