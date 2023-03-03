<div class="sticky-post">
    <div class="sticky-post-image-container">
        <?php
        the_post_thumbnail('full', []);
        ?>
    </div>

    <div class="sticky-post-container common-container">

        <div class="sticky-post-widget-wrap">

            <div class="sticky-post-inner">

                <div class="sticky-post-area">

                    <div class="sticky-post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title('<h1>', '</h1>'); ?></a>
                    </div>

                    <div class="sticky-post-excerpt">
                        <?php
                        the_excerpt();
                        ?>
                    </div>

                    <div class="sticky-post-info-bottom">

                        <?php
                        global $post;
                        $author_ID = $post->post_author;
                        $author_URL = get_author_posts_url($author_ID);
                        ?>
                        <div class="content-above-image">

                            <?php get_template_part('partials/tmp/author-image-name-date') ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>