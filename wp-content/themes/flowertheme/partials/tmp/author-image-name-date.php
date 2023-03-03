<div class="info-author-date">
    <!-- author post info
            ============================================= -->

    <div class="author-image">
        <?php echo get_avatar($author_ID, 90, '', false, [
            'class' => 'img-circle'
        ]) ?>
    </div>

    <div class="author-info-text">
        <a href="<?php $author_URL; ?>">
            <i class="icon-user"></i> <?php the_author() ?>
        </a>
        <p><?php echo get_the_date(); ?></p>
    </div>
    <!--    author post info end-->
</div>