<?php
function webset_bg($file) {
    if ($file['type'] != 'image/png') {
        die('請上傳副檔名為png的檔案(￣(エ)￣)');
    }
    delete_file("img/bg.png", "file");
    move_uploaded_file($file['tmp_name'], "img/bg.png");
}
