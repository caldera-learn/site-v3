<?php

namespace CalderaLearn\Content;

class Teachers {
    /**
     * Holds the class instance.
     *
     * @access  private
     * @var     Teachers
     */
    private static $instance;

    /**
     * Returns the instance of this class.
     *
     * @access  public
     * @return  Teachers
     */
    public static function instance() {
        if (!! empty(self::$instance)) {
            $class_name = __CLASS__;
            self::$instance = new $class_name;
        }
        return self::$instance;
    }

    function __construct() {
        add_action( 'init', [ $this, 'cl_setup_directory_cpt' ] );
    }


    public function cl_setup_directory_cpt() {
        $labels = array(
            'name'               => _x( 'Teachers', 'post type general name', 'caldera-learn' ),
            'singular_name'      => _x( 'Teacher', 'post type singular name', 'caldera-learn' ),
            'menu_name'          => _x( 'Teachers', 'admin menu', 'caldera-learn' ),
            'name_admin_bar'     => _x( 'Teacher', 'add new on admin bar', 'caldera-learn' ),
            'add_new'            => _x( 'Add New', 'teacher', 'caldera-learn' ),
            'add_new_item'       => __( 'Add New Teacher', 'caldera-learn' ),
            'new_item'           => __( 'New Teacher', 'caldera-learn' ),
            'edit_item'          => __( 'Edit Teacher', 'caldera-learn' ),
            'view_item'          => __( 'View Teacher', 'caldera-learn' ),
            'all_items'          => __( 'All Teachers', 'caldera-learn' ),
            'search_items'       => __( 'Search Teachers', 'caldera-learn' ),
            'parent_item_colon'  => __( 'Parent Teachers:', 'caldera-learn' ),
            'not_found'          => __( 'No Teachers found.', 'caldera-learn' ),
            'not_found_in_trash' => __( 'No Teachers found in Trash.', 'caldera-learn' )
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'caldera-learn' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'teacher' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );

        register_post_type( 'teacher', $args );
    }

}