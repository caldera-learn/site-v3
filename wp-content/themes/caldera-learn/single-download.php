<?php
    get_header();
    the_post();

    $current_user = wp_get_current_user();
    $purchased = false;
    if( $current_user->ID && edd_has_user_purchased( $current_user->ID, $post->ID ) ) {
        $purchased = true;
    }


    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    $download_type = wp_get_post_terms( $post->ID, 'download-types' );
    $download_type = $download_type[0]->slug;
    $download_languages = wp_get_post_terms( $post->ID, 'language' );

    if( 'video' == $download_type ) {
        $download_files = edd_get_download_files( $post->ID );
        $video_file = $download_files[1]['file'];
    }
?>

<header class="course-header" style="background-image:url(<?php echo $featured_image[0]; ?>"></header>

<div class="course-content-wrapper">
    <div class="course-title">
        <?php if ( $purchased ) { ?>
            <a class="play-course-video" href="#" data-video="<?php echo $video_file; ?>">
                <i class="fa fa-play-circle"></i>
            </a>
        <?php } ?>
        <h1><?php the_title(); ?></h1>
        <span class="download-type"><?php echo $download_type; ?> Course</span>
    </div>

    <div class="container course">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <?php echo ( ! $purchased ) ? do_shortcode('[purchase_link id="' . $post->ID . '" text="Start Course" style="button" color="blue"]') : ''; ?>
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
</div>

<?php

    get_footer();

?>
