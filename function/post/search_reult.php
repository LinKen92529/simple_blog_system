<?php
function search_result($keyword) {
    global $mysqli, $smarty;
    $sql = "SELECT * FROM `post` WHERE `post_title` LIKE '%{$keyword}%' OR `post_tag` LIKE '%{$keyword}%'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($post = $result->fetch_assoc()) {
        if ($post['post_display'] == 'hide') continue;
        $find_result[$i] = $post;
        if (strlen($find_result[$i]['post_title'])>15) {
            $find_result[$i]['post_title'] = substr($find_result[$i]['post_title'], 0, 15) . '...';
        }
        $find_result[$i]['pic'] = get_pic_path("./uploads/post/{$post['post_sn']}/normal_post_pic.png", "./img/normal_get_pic.jpg");
        // find post owner
        $user_sn = $post['post_owner'];
        $sql = "SELECT `user_name` FROM `users` WHERE `user_sn`='{$user_sn}'";
        $rresult = $mysqli->query($sql) or die($mysqli->connect_error);
        if ($user = $rresult->fetch_assoc()) {
            $find_result[$i]['post_owner'] = $user['user_name'];
        } else {
            $find_result[$i]['post_owner'] = '不明';
        }
        $i++;
    }
    if (isset($find_result)) {
        $smarty->assign("find_result", $find_result);
    }
}
