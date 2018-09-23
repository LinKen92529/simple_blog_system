<?php
function search_result($keyword) {
    global $mysqli, $smarty;
    $sql = "SELECT * FROM `post` WHERE `post_title` LIKE '%{$keyword}%' OR (`post_tag` LIKE '%{$keyword}%')";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($post = $result->fetch_assoc()) {
        $tag_array = explode(';', $post['post_tag']);
        $find_result[$i] = $post;
        $find_result[$i]['pic'] = get_pic_path("./uploads/post/{$post['post_sn']}/normal_post_pic.png", "./img/normal_get_pic.jpg");
        $find_result[$i]['post_tag'] = $tag_array;
        // find post owner
        $user_sn = $post['post_owner'];
        $sql = "SELECT `user_name` FROM `users` WHERE `user_sn`='{$user_sn}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        if ($user = $result->fetch_assoc()) {
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