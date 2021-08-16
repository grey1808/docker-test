<?php
spl_autoload_register(function ($class_name) {
//    echo $class_name.'.php' . "<br>";
    include $class_name . '.php';
});