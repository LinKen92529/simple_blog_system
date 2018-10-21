
<?php
require_once 'header.php';
require_folder('./function/webset/');

$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';

switch ($op) {
    case 'webset_bg':
        webset_bg($_FILES['bg_img']);
        header("location:webset.php?op=web_setting");
        break;

    case 'webset_log':
        webset_log();
        header("location:webset.php?op=webset_show_log");
}

require_once 'footer.php';