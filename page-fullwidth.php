<!--

Template Name:Full width

-->

<!--Header section-->
<?php get_header(); ?>


<?php if(is_front_page()): ?>



<?php else: ?>

    <?php
    while (have_posts()):the_post();
        $valu=get_post_meta(get_the_ID(),'page_banner',true);
    endwhile;
    ?>

    <?php if ($valu==1): ?>
        <!--   bannar section -->
        <section class="page-banner-section">
            <div class="container">
                <?php while (have_posts()):the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                <?php endwhile; ?>
                <ul class="page-depth">
                    <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
                    <?php while (have_posts()):the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>

    <?php endif; ?>

<?php endif; ?>


<!--Content body section-->
		<section class="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="blog-box">


                            <?php while (have_posts()):the_post(); ?>
                               <?php the_content(); ?>
                            <?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End blog section -->
<!--Footer section--->
<?php get_footer(); ?>


