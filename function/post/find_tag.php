<?php
function find_tag($keyword) {
    global $mysqli, $smarty;
    $sql = "SELECT * FROM `post` WHERE `tag_name` LIKE '%{$keyword}%'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($post = $result->fetch_assoc()) {
        $tag[$i] = $post;
        $tag[$i]['pic'] = get_pic_path("./uploads/post/{$post['post_sn']}/normal_post_pic.png", "./img/normal_get_pic.jpg");
    }
    if(isset($tag)) {
        $smarty->assign("tag", $tag);
    }
}