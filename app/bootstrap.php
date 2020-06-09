
<?php

// load CONFIG FILE
require_once ("config/config.php");

//load helpers
require_once('helpers/url_helper.php');

//load Libraries
//require_once ("libraries/Core.php");
//require_once ("libraries/Controller.php");
//require_once ("libraries/Database.php");


//Autoload Core Libraries
spl_autoload_register(function ($className){
    require_once ('libraries/' . $className .'.php');
});