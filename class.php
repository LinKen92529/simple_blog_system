<?php
require_once "header.php";
require_folder("./function/class/");

$op       = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$class_sn = isset($_REQUEST['class_sn']) ? my_filter($_REQUEST['class_sn'], "int") : 0;

switch ($op) {
    case 'insert_class':
        insert_class();
        header("location:class.php?op=class_list");
        break;

    case 'class_list':
        class_list();
        break;

    case 'class_display':
        class_display($class_sn);
        break;

    case 'class_function':
        class_function();
        break;

    case 'class_status':
        class_status($class_sn);
        break;

    case 'class_update':
        class_update($class_sn);
        break;
}

require_once 'footer.php';