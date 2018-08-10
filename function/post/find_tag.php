<?php
function find_tag($keyword) {
    global $mysqli, $smarty;
    $sql = "SELECT * FROM `post` ORDER BY `post_sn` DESC";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while($post = $result->fetch_assoc()) {
        $tag_array = explode(';', $post['post_tag']);
        if (in_array($keyword, $tag_array)) {
            $tag[$i] = $post;
            $tag[$i]['pic'] = get_pic_path("./uploads/post/{$post['post_sn']}/normal_post_pic.png", "./img/normal_get_pic.jpg");
            $tag[$i]['post_tag'] = $tag_array;
        }
        $i++;
    }
    if(isset($tag)) {
        $smarty->assign("tag", $tag);
    }
}