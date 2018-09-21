<?php
function cms_register($user_id, $user_pw, $user_sn) {
    $array = [];
    $array["name"] = "con_test";
    $array['description'] = "Contest to CMS";
    $array['tasks'] = array('batch', 'batch_file', 'batch_compartor', 'batchgrader', 'communication', 'communicationtwoways', 'outputonly', 'outputonlycomparator', 'batchwithoutgen');
    $array['users'] = array(
        array(
            "username" => "$user_id",
            "upassword"  => "$user_pw",
            "ip" => "null"
        )
    );
    $array['token_mdoe'] = "infinite";
    $yaml = Spyc::YAMLDump($array, 4, 60);
    $fp = fopen("./uploads/users/{$user_sn}/contest.yaml", "a");
    fwrite($fp, $yaml);
    fclose($fp);
    copy('./plugin/contest.php', "./uploads/users/{$user_sn}/contest.php");
    system("php ../../uploads/users/{$user_sn}/contest.php");
}