<?php
function search_result($keyword) {
    global $mysqli, $smarty;
    foreach ($_POST as $var_title => $var_value) {
       $$var_title = $mysqli->real_escape_string($_POST[$var_title]);
       err_log($$var_title);
    }
    if (isset($target)) {
        if ($target == "user_name") {
            $sql = "SELECT * FROM `users` WHERE `user_name` LIKE '%{$keyword}%'";
            $result = $mysqli->query($sql) or die($mysqli->connect_error);
            while ($user = $result->fetch_assoc()) {
                $ssql = "SELECT * FROM `post` WHERE `post_owner`='{$user['user_sn']}'";
                $rresult = $mysqli->query($ssql) or die($mysqli->connect_error);
                $i = 0;
                while ($post = $rresult->fetch_assoc()) {
                    $tag_array = explode(';', $post['post_tag']);
                    $find_result[$i] = $post;
                    $find_result[$i]['pic'] = get_pic_path("./uploads/post/{$post['post_sn']}/normal_post_pic.png", "./img/normal_get_pic.jpg");
                    $find_result[$i]['post_tag'] = $tag_array;
                    $i++;
                }
            }
        } else {
            $sql = "SELECT * FROM `post` WHERE `post_title` LIKE '%{$keyword}%' OR (`post_tag` LIKE '%{$keyword}%')";
            $result = $mysqli->query($sql) or die($mysqli->connect_error);
            $i = 0;
            while ($post = $result->fetch_assoc()) {
                $tag_array = explode(';', $post['post_tag']);
                $find_result[$i] = $post;
                $find_result[$i]['pic'] = get_pic_path("./uploads/post/{$post['post_sn']}/normal_post_pic.png", "./img/normal_get_pic.jpg");
                $find_result[$i]['post_tag'] = $tag_array;
                $i++;
            }
        }
    }
    if (isset($find_result)) {
        $smarty->assign("find_result", $find_result);
    }
}