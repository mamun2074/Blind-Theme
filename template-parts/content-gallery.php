<div class="blog-post">
    <div class="flexslider">
        <ul class="slides">



            <?php

                $valu=get_post_meta(get_the_ID(),'post_sliders',true);



            ?>

            <?php foreach ($valu as $image){ ?>

            <li>
                <img alt="" src="<?php echo $image; ?>" />
            </li>

            <?php } ?>

        </ul>
    </div>
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