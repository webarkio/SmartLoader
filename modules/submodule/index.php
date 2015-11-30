<?php

/*
  Plugin Name: SubModule
  Plugin URI: http://smartloader.webark.io/
  Description: Test module
  Version: 1.0
  Author: Maksym Pomazan
 */

if (defined('ABSPATH')) {

    //Module name
    $module = "SubModule";
    //Load after module
    $dependency = "SmartLoader";
    //Submodules dir
    $submodulesDirectory = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "modules");
    //Includes dir
    $includesDirectory = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "includes");

    //DO NOT EDIT AFTER THIS LINE
    if (class_exists("SmartLoader")) {
        //Add module to loader
        SmartLoader::add($module, $dependency, $submodulesDirectory, $includesDirectory);
    } else {
        //Delayed include
        add_action("SmartLoader_loaded", function() {
            include(__FILE__);
        });
        //Include loader if exists
        if(file_exists($includesDirectory.DIRECTORY_SEPARATOR."SmartLoader.class.php")){
          include($includesDirectory.DIRECTORY_SEPARATOR."SmartLoader.class.php");
        }
    }
}
