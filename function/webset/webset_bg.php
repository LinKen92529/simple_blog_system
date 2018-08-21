<?php
function webset_bg($file) {
    err_log($file['type']);
    if ($file['type'] != 'image/jpeg') {
        die('請上傳副檔名為jpg或jpeg的檔案(￣(エ)￣)');
    }
    delete_file("img/bg.jpg", "file");
    move_uploaded_file($file['tmp_name'], "img/bg.jpg");
}