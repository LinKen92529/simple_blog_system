<?php
function post_display($post_sn) {
    global $mysqli, $smarty;
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $post = $result->fetch_assoc();
    //chang post content to html
    $parsedown = new Parsedown;
    $post_content = $parsedown->text($post['post_content']);
    $post['post_content'] = $post_content;
    $img_sn = rand(1, 45);
    $post['tag'] = explode(";", $post['post_tag']);
    $sql = "SELECT * FROM `users` WHERE `user_sn`='{$post['post_owner']}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user = $result->fetch_assoc();
    $post['user_sn'] = $user['user_sn'];
    if (!empty($user) and $user != '') {
        $post['post_owner'] = $user['user_name'];
    } else {
        $post['post_owner'] = "不明";
    }
    $sql = "SELECT * FROM `cmt` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($cmt=$result->fetch_assoc()) {
        $post["cmt"][$i] = $cmt;
        $ssql = "SELECT * FROM `users` WHERE `user_sn`='{$cmt['user_sn']}'";
        $rresult = $mysqli->query($ssql) or die($mysqli->connect_error);
        $owner = $rresult->fetch_assoc();
        $post["cmt"][$i]["user_sn"] = $owner['user_sn'];
        $post["cmt"][$i]["user_name"] = $owner['user_name'];
        $post["cmt"][$i]["user_pic"] = get_pic_path("./uploads/users/{$cmt['user_sn']}/thumb_user_pic.png", "./img/thumb_get_pic.jpg");
        $ssql = "SELECT * FROM `cmt` WHERE `reply_sn`='{$cmt['cmt_sn']}'";
        $rresult = $mysqli->query($ssql) or die($mysqli->connect_error);
        $j = 0;
        while ($reply=$rresult->fetch_assoc()) {
            $post["cmt"][$i]['reply'][$j] = $reply;
            $sssql = "SELECT * FROM `users` WHERE `user_sn`='{$reply['user_sn']}'";
            $rrresult = $mysqli->query($sssql) or die($mysqli->connect_error);
            $user = $rrresult->fetch_assoc();
            if ($user) {
                $post['cmt'][$i]['reply'][$j]['user_sn'] = $user['user_sn'];
                $post["cmt"][$i]['reply'][$j]["user_name"] = $user['user_name'];
                $post["cmt"][$i]['reply'][$j]["user_pic"] = get_pic_path("./uploads/users/{$user['user_sn']}/thumb_user_pic.png", "./img/thumb_get_pic.jpg");
            }
            $j++;
        }
        $i++;
    }
    $smarty->assign("post", $post);
    $sql = "UPDATE `post` SET
    `post_counter`=`post_counter`+1
    WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}