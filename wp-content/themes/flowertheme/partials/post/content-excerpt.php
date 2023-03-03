<div class="non-sticky-post">
    <div class="non-sticky-post-inner">

        <div class="image-groving-animation">
            <a href="<?php the_permalink(); ?>"><?php
                the_post_thumbnail();
                ?></a>
        </div>

        <a href="<?php the_permalink(); ?>"><?php the_title('<h1>', '</h1>'); ?></a>
        <?php
        the_excerpt();
        ?>

        <?php
        get_template_part('partials/tmp/author-image-name-date');
        ?>

    </div>
</div>

