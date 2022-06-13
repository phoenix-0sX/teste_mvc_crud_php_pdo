<?php
    //define the directory separator and the application root
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'home'.DS.'lanja'.DS.'projets'.DS.'php_crud');

    //define the other files routes
    defined('CONTROLLER_DIR') ? null : define('CONTROLLER_DIR', SITE_ROOT.DS.'controller');
    defined('DB_CONFIG_DIR') ? null : define('DB_CONFIG_DIR', SITE_ROOT.DS.'databases');
    defined('MODEL_DIR') ? null : define('MODEL_DIR', SITE_ROOT.DS.'model');
    defined('VIEW_DIR') ? null : define('VIEW_DIR', SITE_ROOT.DS.'resources'.DS.'view');
    defined('ROUTES_DIR') ? null : define('ROUTES_DIR', SITE_ROOT.DS.'routes');

    //define assets routes
    defined('CSS_DIR') ? null : define('CSS_DIR', SITE_ROOT.DS.'resources'.DS.'css');
    defined('JS_DIR') ? null : define('JS_DIR', SITE_ROOT.DS.'resources'.DS.'js');
    
    //define routes
    define('css_route', CSS_DIR.DS.'bootstrap.min.css');
    define('js_route', JS_DIR.DS.'bootstrap.bundle.min.js');
    define('header_route', VIEW_DIR.DS.'layouts'.DS.'header.php');
    define('footer_route', VIEW_DIR.DS.'layouts'.DS.'footer.php');
    define('home_route', VIEW_DIR.DS.'home.php');
    define('read_route', VIEW_DIR.DS.'read.php');
    define('NotFound_route', VIEW_DIR.DS.'404.php');
  
    //require DB connection and contactController
    require_once CONTROLLER_DIR.DS.'contactController.php';
    $db = require_once DB_CONFIG_DIR.DS.'getconnection.php';

    require_once ROUTES_DIR.DS.'web.php';
?>