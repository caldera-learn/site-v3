<?php

namespace CalderaLearn\ACF;


class Teachers extends Fields {

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
        parent::__construct();
        $this->post_type = 'teacher';
    }

    public function register_acf_fields() {
        acf_add_local_field_group(array (
            'key' => 'group_59b2477f1bf69',
            'title' => 'Teachers',
            'fields' => array (
                array (
                    'key' => 'field_59b24783d3339',
                    'label' => 'Teacher User',
                    'name' => 'cl_teacher_user',
                    'type' => 'user',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'role' => '',
                    'allow_null' => 0,
                    'multiple' => 0,
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'teacher',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));
    }
}
