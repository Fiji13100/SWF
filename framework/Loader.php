<?php

class Loader {

    public static function init() {

        spl_autoload_register(function($class) {
            if (file_exists(FRAMEWORK_PATH . $class . '.php')) {
                require_once FRAMEWORK_PATH . $class . '.php';
            }
        });

        spl_autoload_register(function($class) {
            if (file_exists(APP_PATH . 'controllers/' . $class . '.php')) {
                require_once APP_PATH . 'controllers/' . $class . '.php';
            }
        });

    }

}