<?php
function insert_post_content($file, $post_sn) {
    err_log($file['type']);
    if ($file['type'] == "text/html") {
        if ($file['size'] < 10240000) {
            delete_file("uploads/post/{$post_sn}/{$post_sn}.html", "file");
            move_uploaded_file($file['tmp_name'], "uploads/post/{$post_sn}/{$post_sn}.html");
            return true;
        }
        return false;
    }
    return false;
}