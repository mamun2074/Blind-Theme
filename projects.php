<?php

/*Template Name:Project*/

get_header();


?>
    <!--Banner section-->
    <section class="page-banner-section">
        <div class="container">
            <h2>Projects</h2>
            <ul class="page-depth">
                <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/project')) ?>">Project</a></li>
            </ul>
        </div>
    </section>

    <!--Page section-->
    <section class="projects-section projects-page-section">
        <div class="container">
            <div class="title-section alt-title">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Latest Project</h1>
                    </div>
                    <div class="col-md-7">
                        <ul class="filter">

                            <?php
                            $blind_project = new WP_Query(array(
                                'post_type' => 'blind_project',
                            ));

                            while ($blind_project->have_posts()):$blind_project->the_post();

                                $project_cate = get_the_terms(get_the_ID(), 'project_category');


                                if (!empty($project_cate)) {

                                    foreach ($project_cate as $cat_proje) {
                                        $total_arra[] = $cat_proje->name;
                                    }

                                }

                            endwhile;

                            if (!empty($project_cate)) {
                                $uniq_cat = array_unique($total_arra);
                            }


                            ?>

                            <li><a class="active" href="#" data-filter="*">Show All</a></li>

                            <?php if (!empty($uniq_cat)): ?>

                            <?php foreach ($uniq_cat as $cata): ?>
                                <li><a href="#" data-filter=".<?php echo $cata; ?>"><?php echo $cata; ?></a></li>
                            <?php endforeach; ?>

                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="project-box template_custom_class iso-call col3">

                <?php

                while ($blind_project->have_posts()):$blind_project->the_post();

                    $custom_cate = get_the_terms(get_the_ID(), 'project_category');

                    if (!empty($custom_cate)) {

                        foreach ($custom_cate as $cate) {
                            $vvvv[] = $cate->name;
                        }

                    }
                    $project_class = implode(' ', $vvvv);
                    ?>
                    <div class="project-post <?php echo $project_class;

                    ?>">

                        <?php the_post_thumbnail(); ?>
                        <div class="hover-box">
                            <div class="inner-hover">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <span>bulding, house</span>
                                <a href="single-project.html" class="link"><i class="fa fa-link"></i></a>
                                <a href="<?php the_post_thumbnail_url(); ?>"
                                   class="zoom"><i
                                            class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>


<?php
get_footer();

?>