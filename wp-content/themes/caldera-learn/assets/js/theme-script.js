var my_theme = my_theme || {};

(function($) {
	my_theme.run = function(theme) {

        $(document).ready(function(){

            $('body').on('click', '.menu-toggle', theme.menu_toggle);
            $('body').on('click', 'a.play-course-video', theme.course_video_toggle );
            $('body').on('click', 'video', function(){
                var video = $(this).get(0);
                if( video.paused ) {
                    video.play();
                } else {
                    video.pause();
                }
            });

        });

        theme.menu_toggle = function(e) {
        	e.preventDefault();
        	$('body').toggleClass('menu-on');
		};

        theme.course_video_toggle = function(e) {
            e.preventDefault();
            var video_file = $(this).data('video'),
                $video_obj = $('video#cl_video_player'),
                $course_header = $('.course-header');
            $('.course-content-wrapper').toggleClass('video-active');

            if ( $video_obj.length > 0 ) {
                $video_obj.get(0).pause();
                $video_obj.remove();
            } else {
                $course_header.prepend('<video id="cl_video_player" controls ><source src="' + video_file + '"></source></video>');
                setTimeout(function(){
                    $course_header.find('video').get(0).play();
                }, 1000);
            }
            $course_header.toggleClass('video-active');

        };

		return theme;
    }(my_theme.run || {});
}(jQuery));