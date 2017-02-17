<?php

// __autoload()
// function __autoload($classname) {
// 	include_once $classname . ".php";
	
// 	var_dump($classname);
// }

// spl_autoload_register();
// C1:
// function my_autoloader_cong($class) {
//     include $class . '123.php';
// }
// function my_autoloader_tru($class) {
//     include $class . '321.php';
// }
// spl_autoload_register('my_autoloader_cong');
// spl_autoload_register('my_autoloader_tru');
// C2:
// spl_autoload_register(function ($class) {
// 	include $class . '.php';	
// });

$a = new Cong(1, 2);
echo $a->res();

$b = new Tru(1, 2);
echo $b->res();
