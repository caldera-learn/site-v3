<?php

namespace CalderaLearn\Content;


class Courses {
    /**
     * Holds the class instance.
     *
     * @access  private
     * @var     Courses
     */
    private static $instance;

    /**
     * Returns the instance of this class.
     *
     * @access  public
     * @return  Courses
     */
    public static function instance() {
        if (!! empty(self::$instance)) {
            $class_name = __CLASS__;
            self::$instance = new $class_name;
        }
        return self::$instance;
    }

    function __construct() {
        add_action( 'init', [ $this, 'cl_setup_language_taxonomy' ] );
        add_action( 'init', [ $this, 'cl_setup_download_type_taxonomy' ] );
    }

    public function cl_setup_language_taxonomy() {
        $labels = array(
            'name'              => _x( 'Languages', 'taxonomy general name', 'caldera-learn' ),
            'singular_name'     => _x( 'Language', 'taxonomy singular name', 'caldera-learn' ),
            'search_items'      => __( 'Search Languages', 'caldera-learn' ),
            'all_items'         => __( 'All Languages', 'caldera-learn' ),
            'parent_item'       => __( 'Parent Language', 'caldera-learn' ),
            'parent_item_colon' => __( 'Parent Language:', 'caldera-learn' ),
            'edit_item'         => __( 'Edit Language', 'caldera-learn' ),
            'update_item'       => __( 'Update Language', 'caldera-learn' ),
            'add_new_item'      => __( 'Add New Language', 'caldera-learn' ),
            'new_item_name'     => __( 'New Language Name', 'caldera-learn' ),
            'menu_name'         => __( 'Language', 'caldera-learn' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'language' ),
        );

        register_taxonomy( 'language', array( 'download' ), $args );
    }

    public function cl_setup_download_type_taxonomy() {
        $labels = array(
            'name'              => _x( 'Download Types', 'taxonomy general name', 'caldera-learn' ),
            'singular_name'     => _x( 'Download Type', 'taxonomy singular name', 'caldera-learn' ),
            'search_items'      => __( 'Search Types', 'caldera-learn' ),
            'all_items'         => __( 'All Types', 'caldera-learn' ),
            'parent_item'       => __( 'Parent Type', 'caldera-learn' ),
            'parent_item_colon' => __( 'Parent Type:', 'caldera-learn' ),
            'edit_item'         => __( 'Edit Type', 'caldera-learn' ),
            'update_item'       => __( 'Update Type', 'caldera-learn' ),
            'add_new_item'      => __( 'Add New Download Type', 'caldera-learn' ),
            'new_item_name'     => __( 'New Type Name', 'caldera-learn' ),
            'menu_name'         => __( 'Download Types', 'caldera-learn' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'download-types' ),
        );

        register_taxonomy( 'download-types', array( 'download' ), $args );
    }
}