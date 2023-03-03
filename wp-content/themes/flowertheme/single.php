<?php get_header(); ?>
    <!-- Content
    ============================================= -->
    <section class="body-class items">

        <div class="common-container">
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
                        <div class="page-title-1">
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
                                'before' => '<p class="text-center">' . __('Pages: ', 'yasik'),
                                //перемещает текст пагинации в центр блока
                                'after' => '</p>'
                            ];

                            wp_link_pages($defaults); //включает пагинацию
                            ?>
                            <!-- Post Single - Content End -->

                        </div>
                    <!-- .entry end -->

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

                    <?php
                    }
                    }
                    ?>

                </div><!-- .postcontent end -->
        </div>
    </section>

<?php get_footer(); ?>