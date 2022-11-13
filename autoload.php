<?php
 spl_autoload_register( function($class) {
  $path = $_SERVER['DOCUMENT_ROOT'] . '/php/';
  require_once  $path . $class .'.php';
 });
 
 $object = new Home();
 # Loads the class "/classes/Home.php"
 echo $object->index();
 echo "<br/>";
 $object = new Template();
 # Loads the class "/classes/Template.php"
 echo $object->index();