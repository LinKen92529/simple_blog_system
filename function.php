<?php
#init the var
function my_filter($var, $type = "int") {
    switch ($type) {
        case 'string':
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES) : '';
            break;
        case 'url':
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_URL) : '';
            break;
        case 'email':
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_EMAIL) : '';
            break;
        case 'int':
        default:
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_NUMBER_INT) : '';
            break;
    }

    return $var;
}

#require all the php file in the path
function require_folder($dir) {
    foreach (scandir($dir) as $file) {
        if ($file != '.' && $file != '..') {
            require_once $dir . '/' . $file;
        }
    }
}

#error log
function err_log($text) {
    $handle = fopen('error_log.txt', 'a');
    $txt = '[ ' . date("Y-m-d H:i:s") . ' ] ' . $text . "\n";
    fwrite($handle, $txt);
    fclose($handle);
}

#save pic
function save_pic($pic_path, $pic_name, $file) {
    include_once "plugin/upload/class.upload.php";
    $pic = new Upload($_FILE["$file"], 'zh_TW');
    if ($pic->uploaded) {
        $pic->file_new_name_body = $pic_name;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 600;
        $pic->image_y            = 400;
        $pic->image_convert      = 'jpg';
        $pic->image_ratio_crop   = true;
        $pic->Process("{$pic_path}");
        if ($pic->processed) {
            $pic->Clean();
        } else {
            die('error : ' . $pic->error);
        }
    }
}

#get pic
function get_pic_path($path, $default) {
    if(file_exists($path)) {
        return $path;
    } 
    return $default;
}

#delete file
function delete_file($path, $type) {
    if ($type == "file") {
        if (file_exists($path)) {
            unlink($path);
        }
    } else if ($type == "folder") {
        if (is_dir($path)) {
            foreach (scandir($path) as $file) {
                if ($file != '.' && $file != '..') {
                    unlink($path . '/' . $file);
                }
            }
            rmdir($path);
        }
    }
}