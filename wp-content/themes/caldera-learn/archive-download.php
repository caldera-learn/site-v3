<?php

get_header();
$featured_course_id = 8;
$teachers = new WP_Query( [ 'post_type' => 'teacher', 'posts_per_page' => 4 ] );
?>

<div id="home-hero">
    <div class="home-hero-cta">
        <p>
            Teaching from passion <br /><em>Caldera Learn</em>
        </p>
    </div>
</div>

<div class="container-fluid courses-teachers">
    <div class="container">
        <h3 class="teacher-title">
            Our Teachers
        </h3>
        <div class="row">
            <?php while( $teachers->have_posts() ) : $teachers->the_post(); ?>
                <?php $teacher = get_field( 'cl_teacher_user' ); ?>
                <?php $avatar_url = get_avatar_url( $teacher['ID'] ); ?>
                <div class="col-xs-6 col-sm-3 teacher">
                    <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $avatar_url; ?>);">
                        <span class="teacher-title">
                            <?php the_title(); ?>
                        </span>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <h3 class="teacher-title">
        Our Courses
    </h3>
    <div class="row">
        <?php while( have_posts() ) : the_post(); ?>
        <?php $post_thumb = get_post_thumbnail_id( $post->ID ); ?>
        <?php $img = wp_get_attachment_image_src( $post_thumb, 'full' ); ?>
            <div class="col-sm-6 course" style="background-image:url(<?php echo $img[0]; ?>);">
                <a href="<?php the_permalink(); ?>">
                    <span class="course-title">
                        <?php the_title(); ?>
                        <span class="btn btn-primary">
                            Start Course
                        </span>
                    </span>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
