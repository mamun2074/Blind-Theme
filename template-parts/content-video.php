<div class="blog-post">
    <!-- youtube -->



    <?php
    $value=get_post_meta(get_the_ID(),'post_video',true);
    if (!empty($value)): ?>
    <iframe class="videoembed" src="<?php echo $value; ?>" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
   <?php endif; ?>
    <!-- End youtube -->
    <div class="post-content-text">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <ul class="post-tags">
            <li> <?php the_time('d M'); ?> ,</li>
            <li><a href="#"><?php the_author(); ?></a> ,</li>
            <li><a href="#"><?php the_category(); ?></a></li>
        </ul>
        <p>
            <?php echo wp_trim_words(get_the_content(),100,false); ?>
        </p>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
</div>