<?php
/**
 * Created by PhpStorm.
 * User: roysivan
 * Date: 9/12/17
 * Time: 5:14 PM
 */

namespace CalderaLearn\ACF;


class Courses extends Fields {

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
        $this->post_type = 'courses';
    }

    public function register_acf_fields() {
        acf_add_local_field_group(array (
            'key' => 'group_59b877fbda6e6',
            'title' => 'Video Course Info',
            'fields' => array (
                array (
                    'key' => 'field_59b878238de68',
                    'label' => 'Video Length',
                    'name' => 'download_video_length',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_59b8782b8de69',
                    'label' => 'Video Teachers',
                    'name' => 'download_video_teachers',
                    'type' => 'user',
                    'instructions' => 'Include all teachers (not including yourself)',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'role' => array (
                        0 => 'shop_vendor',
                    ),
                    'allow_null' => 0,
                    'multiple' => 1,
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'download',
                    ),
                    array (
                        'param' => 'post_taxonomy',
                        'operator' => '==',
                        'value' => 'download-types:video',
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