<?php
require_once "header.php";
require_folder("./function/pclass/");

$op       = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$class_sn = isset($_REQUEST['class_sn']) ? my_filter($_REQUEST['class_sn'], "int") : 0;

switch ($op) {
    case 'insert_pclass':
        insert_class();
        header("location:pclass.php?op=pclass_list");
        break;
        
    case 'insert_pclass_ajax':
        insert_pclass_ajax();
        break;

    case 'pclass_list':
        pclass_list();
        break;

    case 'pclass_display':
        pclass_display($pclass_sn);
        break;

    case 'pclass_function':
        pclass_function();
        break;

    case 'pclass_status':
        pclass_status($pclass_sn);
        break;

    case 'pclass_update':
        pclass_update($pclass_sn);
        break;

}

require_once 'footer.php';