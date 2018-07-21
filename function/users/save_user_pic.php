<?php
function save_user_pic($user_sn = "") {
    include_once "plugin/upload/class.upload.php";
    $pic = new Upload($_FILES['user_pic'], 'zh_TW');
    if ($pic->uploaded) {
        $pic->file_new_name_body = "normal_user_pic";
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 600;
        $pic->image_y            = 400;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process("uploads/users/{$user_sn}/");
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        $pic->file_new_name_body = "thumb_user_pic";
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 100;
        $pic->image_y            = 100;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process("uploads/users/{$user_sn}/");
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}