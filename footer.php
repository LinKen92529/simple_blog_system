<?php
$smarty->assign('system_name', _system_name);
$smarty->assign('op', $op);
$smarty->display('index.html');
if (isset($_REQUEST['error'])) {
  $smarty->assign('login_error', 'test');
}