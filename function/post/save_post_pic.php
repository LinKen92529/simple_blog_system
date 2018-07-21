<?php
function save_post_pic($post_sn) {
    include_once "plugin/upload/class.upload.php";
    $pic = new Upload($_FILES['post_pic'], 'zh_TW');
    if ($pic->uploaded) {
        $pic->file_new_name_body = "normal_post_pic";
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 700;
        $pic->image_y            = 400;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process("uploads/post/{$post_sn}/");
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        $pic->file_new_name_body = "thumb_post_pic";
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 100;
        $pic->image_y            = 100;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process("uploads/post/{$post_sn}/");
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}