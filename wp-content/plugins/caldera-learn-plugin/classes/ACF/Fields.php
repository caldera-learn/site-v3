<?php

namespace CalderaLearn\ACF;


class Fields {

    /**
     * @var post_type
     */
    private $post_type;

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
        if( ! function_exists('acf_add_local_field_group') ) {
            return false;
        }
        add_action( 'init', [ $this, 'register_acf_fields' ] );
    }

    public function register_acf_fields() {}
}