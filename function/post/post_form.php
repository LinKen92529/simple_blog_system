<?php
function post_form($post_sn) {
    global $mysqli, $is_admin, $smarty;
    if (!$is_admin) {
        die("你沒有權限喔><");
    }
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $post = $result->fetch_assoc();
    if(empty($post)) {
        return false;
    }
    $img_sn = rand(1, 45);
    $post['pic'] = get_pic_path("uploads/post/{$post_sn}/normal_post_pic.png", "./img/default_post_img/{$img_sn}.png");
    $smarty->assign("post", $post);
}