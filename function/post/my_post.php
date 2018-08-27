<?php
function my_post() {
    global $mysqli, $smarty, $is_admin, $now_user_sn;
    if (!$is_admin or $now_user_sn != $_SESSION['user_sn']) {
        die('一起來尋找紅心AΣ>―(〃°ω°〃)♡→');
    }
    $sql = "SELECT * FROM `post` WHERE `post_owner`='{$now_user_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($post = $result->fetch_assoc()) {
        $all_post[$i] = $post;
        $i++;
    }
    $smarty->assign('all_post', $all_post);
}