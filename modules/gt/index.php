<?php
//set_include_path(get_include_path().":"."/path/to/new/folder");
define("MAIN_PATH", "../../../sevian2020/");
define("MODULE_PATH", "../../../sevian2020/");
define("JSON_PATH", "../../../sevian2020/json/");
define("TEMPLATES_PATH", "../../../sevian2020/templates/");
define("IMAGES_PATH", "../../../sevian2020/images/");
define("PATH_IMAGES", "../../../sevian2020/images/");

define("SEVIAN_PATH", "");
define("SIGEFOR_PATH", "");

include MAIN_PATH.'Sevian/functions.php';
include MAIN_PATH.'Sevian/sevian.php';

include MAIN_PATH.'configuration/themes.php';
include MAIN_PATH.'configuration/bd.php';
include MAIN_PATH.'configuration/inputs.php';
include 'elements.php';
include MAIN_PATH.'configuration/actions.php';
include MAIN_PATH.'configuration/commands.php';
include MAIN_PATH.'gt/configuration/css.php';
include MAIN_PATH.'configuration/js.php';
include 'init.php';

/* test */
echo Sevian\S::render();