<?php
global $post;

$authors[] = get_user_by( 'id', $post->post_author );
if( $additional_authors = get_field( 'download_video_teachers' ) ) {
    foreach( $additional_authors as $author ) {
        $authors[] = get_user_by( 'id', $author['ID'] );
    }
}

?>
<div class="video-course-meta">
    <div class="course-length">
        <strong>Course Length:</strong> <?php the_field( 'download_video_length' ); ?>
    </div>
    <ul class="course-teachers">
        <li><strong><?php echo ( count( $authors ) > 1 ) ? 'Teachers' : 'Teacher'; ?>:</strong></li>
        <?php foreach( $authors as $author ) : ?>
            <li>
                <a href="<?php echo get_author_posts_url( $author->ID ); ?>">
                    <?php echo $author->display_name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
