<?php
require_once "header.php";
require_folder("./function/tag/");

$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';

switch ($op) {
    case 'tag_list':
        tag_list();
        break;

    case 'add_tag':
        add_tag();
        break;

    case 'update_tag':
        update_tag();
        break;

    case 'delete_tag':
        delete_tag();
        break;
}

require_once "footer.php";