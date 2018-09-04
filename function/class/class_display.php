<?php
function class_display($class_sn) {
    global $mysqli, $smarty;
    err_log($class_sn);
    $sql = "SELECT * FROM `post` WHERE `class_sn`='{$class_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($post = $result->fetch_assoc()) {
        $post_sn = $post['post_sn'];
        err_log($post_sn);
        $ssql = "SELECT * FROM `users` WHERE `user_sn`='{$post['post_owner']}'";
        $rresult = $mysqli->query($ssql) or die($mysqli->connect_error);
        if ($user = $rresult->fetch_assoc()) {
            $post['post_owner'] = $user['user_name'];
        } else {
            $post['post_owner'] = "不明";
        }
        $class_post[$i] = $post;
        $img_sn = rand(1, 27);
        $class_post[$i]["pic"] = get_pic_path("./uploads/post/{$post_sn}/normal_post_pic.png", "./img/default_post_img/{$img_sn}.png");
        $i++;
    }
    @$smarty->assign("class_post", $class_post);
}