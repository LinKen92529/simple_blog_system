 <?php
require_once "plugin/spyc/Spyc.php";
$user_id = "test";
$user_pw = "ttest";
$$array = [];
    $array["name"] = "con_test";
    $array['description'] = "Contest to CMS";
    $array['tasks'] = array('batch', 'batch_file', 'batch_compartor', 'batchgrader', 'communication', 'communicationtwoways', 'outputonly', 'outputonlycomparator', 'batchwithoutgen');
    $array['users'] = array(
        array("username" => $user_id, "upassword"  =>$user_pw, "ip" => "null")
    );
    $array['token_mdoe'] = "infinite";

$yaml = Spyc::YAMLDump($array,4,60);
echo $yaml;