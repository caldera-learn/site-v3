<?php
    get_header();
    the_post();
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    $download_type = wp_get_post_terms( $post->ID, 'download-types' );
    $download_type = $download_type[0]->slug;
    $download_languages = wp_get_post_terms( $post->ID, 'language' );
?>

<header class="course-header" style="background-image:url(<?php echo $featured_image[0]; ?>"></header>
<div class="course-title">
    <h1><?php the_title(); ?></h1>
    <span class="download-type"><?php echo $download_type; ?> Course</span>
</div>

<div class="container course">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <?php echo do_shortcode('[purchase_link id="' . $post->ID . '" text="Start Course" style="button" color="blue"]'); ?>
        <?php
        if( 'video' === $download_type ) :
            get_template_part( 'partials/video-meta' );
        endif;
        ?>

        <?php if( ! empty( $download_languages ) ) : ?>
            <ul class="course-languages">
                <li><strong>Languages & Frameworks:</strong></li>
                <?php foreach( $download_languages as $language ) : ?>
                    <li>
                        <a href="/language/<?php echo $language->slug; ?>">
                            <?php echo $language->name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</div>


<?php

    get_footer();

?>
