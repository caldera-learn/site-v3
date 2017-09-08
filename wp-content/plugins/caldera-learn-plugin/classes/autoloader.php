<?php
spl_autoload_register('caldera_learn_autoloader');

function caldera_learn_autoloader($className) {
    if ( false === strpos( $className, 'CalderaLearn' ) ) {
        return;
    }
    $namespace=str_replace("\\","/",__NAMESPACE__);
    $className = str_replace( 'CalderaLearn', '', $className );
    $className=str_replace("\\","/",$className);
    $class=CL_PLUGIN_DIR."classes".(empty($namespace)?"":$namespace."/")."{$className}.php";
    include_once($class);
};
