<?php
/**
 * Created by PhpStorm.
 * User: roysivan
 * Date: 9/8/17
 * Time: 12:34 AM
 */

namespace CalderaLearn\ACF;

use CalderaLearn\ACF\Teachers;

class LoadACF {
    /**
     * Holds the class instance.
     *
     * @access  private
     * @var     LoadACF
     */
    private static $instance;

    /**
     * Returns the instance of this class.
     *
     * @access  public
     * @return  LoadACF
     */
    public static function instance() {
        if (!! empty(self::$instance)) {
            $class_name = __CLASS__;
            self::$instance = new $class_name;
        }
        return self::$instance;
    }

    function __construct() {
        Teachers::instance();
    }
}