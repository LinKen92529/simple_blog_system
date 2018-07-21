<?php
$smarty->assign('system_name', _system_name);
$smarty->assign('op', $op);
$smarty->display('index.html');
if (isset($_REQUEST['msg'])) {
  $smarty->assign('msg', $_REQUEST['msg']);
}