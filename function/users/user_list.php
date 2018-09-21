<?php
function user_list() {
    global $mysqli, $smarty, $is_admin;

    if (!$is_admin) {
        die("你不是管理員並沒有權限可以觀看喔<(_ _)>");
    }

    $sql = "SELECT * FROM `users` ORDER BY  `user_sn` DESC";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while($user = $result->fetch_assoc()) {
        if ($user['user_right'] != "top") {
            $all_user[$i] = $user;
            $i++;
        }
    }
    $smarty->assign("all_user", $all_user);
}