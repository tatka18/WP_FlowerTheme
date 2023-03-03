<?php $unique_id = esc_attr(uniqid('search-form-')); ?>

<form role="search" method="get" class="search-form"
      action="<?php echo esc_url(home_url('/')); ?>">
    <div class="search-line-box">
        <input type="search" id="<?php echo $unique_id; ?>" name="s"
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e('Search', 'yasik'); ?>"/>
            <button type="submit" class="btn-size"><i class="lnr lnr-leaf"></i></button>
    </div>
</form>

<!--__() returns the translated string-->
<!--_e() outputs the translated string-->