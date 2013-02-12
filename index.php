<?php

require_once('./meta-functions.php');
require_once('./class/renderer.class.php');
require_once('./class/componentmanager.class.php');

// For debugging purposes - turn this off before release.
error_reporting(E_ALL);

//main render section
$GLOBALS['yocto'] = new Renderer();
if(!is_dir('./content/')){ //install needed
	include('./install/install.php'); //run install
}
$GLOBALS['yocto']->registerAjax("ajax-posts", "./ajax/posts.ajax.php");
$GLOBALS['yocto']->setTitle('Yoctoblog');
$GLOBALS['yocto']->setTemplate('default');
$GLOBALS['yocto']->render();