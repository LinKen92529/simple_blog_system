<?php
/* Smarty version 3.1.32, created on 2018-08-12 13:41:14
  from 'D:\UniServerZ\www\yukino\templates\user_register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b702aea9c1cc1_72971956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63d0465af71d6f089c744a95080ad99c841a70a6' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\user_register.html',
      1 => 1534077649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b702aea9c1cc1_72971956 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="plugin/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="plugin/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $("#user_register").validate();
        $("#user_id").blur(function() {
            $.ajax({
                url: "user.php?op=user_id_judge",
                data: {
                    user_id: $("#user_id").val()
                },
                type: "POST",
                dataType: "HTML",
                success: function($id_judge) {
                    var result = $id_judge.charAt(0);
                    if (result == "t") {
                        var rlt = "帳號可使用(´Ａ｀。)";
                        $("#submit_button").removeAttr("disabled");
                    } else if (result=="f") {
                        var rlt = "帳號已被別人搶先註冊過了喔( ˘･з･)";
                        $("#submit_button").attr("disabled", true);
                    }
                    $("#uid_judge_result").html(rlt);
                }
            });
        });
        $("#email_judge_btn").click(function(){
            $.ajax({
                url: "user.php?op=user_email_judge",
                data: {
                    user_email: $("#user_email").val()
                },
                type: "POST",
                dataType: "HTML",
                success: function($email_judge) {
                    var result = $email_judge.charAt(0);
                    if (result == "t") {
                        var email_rlt = "信箱可使用(*‘ v`*)";
                        $("#submit_button").removeAttr("disabled");
                    } else if (result=="f") {
                        var email_rlt = "信箱已被槍先註冊了(*´艸`*)";
                        $("#submit_button").attr("disabled", true);
                    }
                    $("#user_email_judge_result").html(email_rlt);
                }
            });
        }); 
    });
<?php echo '</script'; ?>
>
<br>
<h3>使用者註冊</h3>
<br>
<form  action="user.php" id="user_register" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-md-4 col-form-label" for="user_name">使用者名稱：</label>
        <div class="col-md-8">
            <input type="text" class="form-control" maxlength="20" name="user_name" id="user_name" placeholder="請輸入姓名" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 col-form-label" for="user_id">使用者帳號：</label>
        <div class="col-md-8">
            <input type="text" class="form-control" minlength="6" maxlength="16" name="user_id" id="user_id" placeholder="請輸入帳號" required>
            <span id="uid_judge_result"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 col-form-label" for="user_pw">使用者密碼：</label>
        <div class="col-md-8">
            <input type="password" class="form-control" minlength="6" maxlength="16" name="user_pw" id="user_pw" placeholder="請輸入密碼" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 col-form-label" for="user_email">使用者信箱：</label>
        <div class="col-md-8">
            <div class="input-group-append">
                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="請輸入信箱" required>
                <button class="btn btn-outline-danger" id="email_judge_btn">檢查</button>
            </div>
            <span id="user_email_judge_result"></span>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <input type="hidden" name="op" value="insert_user">
            <button type="submit" class="btn btn-primary" id="submit_button">註冊</button>
        </div>
    </div>
</form><?php }
}
