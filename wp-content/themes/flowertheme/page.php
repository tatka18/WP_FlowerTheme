<?php get_header(); ?>

    <!-- Content
    ============================================= -->
    <section class="page-container common-container">

        <div class="page-common-area">
            <div class="content-top-area">
                    <div class="content-article-area">

                        <!-- Page Content
                        ============================================= -->
                        <div class="page-content">

                            <?php
                            if (have_posts()) {
                            while (have_posts()) {
                            the_post();

                            global $post;
                            $author_ID = $post->post_author;
                            $author_URL = get_author_posts_url($author_ID);
                            ?>

                            <div id="post-<?php the_ID(); ?>"
                                <?php
                                post_class('page');
                                ?>>

                                <!-- Page
                                              ============================================= -->
                                <div class="entry">

                                    <!-- Entry Title
                                                    ============================================= -->
                                    <div class="page-title-1">
                                        <h1><?php the_title(); ?></h1>
                                    </div><!-- .entry-title end -->

                                    <!-- Entry Image
                                                    ============================================= -->
                                    <div class="entry-image">
                                        <?php

                                        if (has_post_thumbnail()) {
                                            ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                the_post_thumbnail('small');
                                                ?>
                                            </a>
                                            <?php
                                        }

                                        ?>
                                    </div><!-- .entry-image end -->

                                    <!-- Entry Content
                                                    ============================================= -->
                                    <div class="entry-content">

                                        <?php
                                        the_content();
                                        ?>
                                        <!-- Page - Content End -->

                                    </div>
                                </div><!-- .entry end -->

                                <?php
                                }
                                }
                                ?>

                            </div>
                        </div><!-- .pagecontent end -->

                    </div>
            </div>

            <?php
            get_sidebar();
            ?>
        </div>

    </section><!-- #content end -->


<?php get_footer(); ?>