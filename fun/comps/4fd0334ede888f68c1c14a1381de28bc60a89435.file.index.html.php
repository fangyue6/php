<?php /* Smarty version Smarty-3.1.17, created on 2015-10-28 02:16:47
         compiled from "C:\env\wamp\www\php\php\fun\views\index.html" */ ?>
<?php /*%%SmartyHeaderCode:84665630300f358888-85338189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fd0334ede888f68c1c14a1381de28bc60a89435' => 
    array (
      0 => 'C:\\env\\wamp\\www\\php\\php\\fun\\views\\index.html',
      1 => 1445952264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84665630300f358888-85338189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flag' => 0,
    'username' => 0,
    'fun' => 0,
    'message' => 0,
    'me' => 0,
    'col' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5630300f4ce336_45544147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5630300f4ce336_45544147')) {function content_5630300f4ce336_45544147($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\env\\wamp\\www\\php\\php\\fun\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>FangYue`s</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/common.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/my.js"></script>
<script type="text/javascript">
    function next(){
        var h1=$("#travel .span12 .row .span6 .block-left h1").text();
        var p0=$("#travel .span12 .row .span6 .block-left p:eq(0)").text();
        var p1=$("#travel .span12 .row .span6 .block-left p:eq(1)").text();
        alert(p0);
       // alert(p1);
    }
    /**
     * 留言
     */
    function talk(){
        $message=$("#message").val().trim();
        if($message==''){
            Alert("请输入留言内容！！！",2500);
            return;
        }
        $(function(){

            $.ajax({
                url: "control/message.php",
                type: "POST",
                //contentType: "application/json; charset=utf-8",
                data:{"message":$message},
                //dataType: "json",
                error: function(){
                    alert('Error loading XML document');
                },
                success: function(data,status){//如果调用php成功
                   // alert(data);
                    if(data!=1){
                        Alert("留言不成功!!!",2500);
                    }else{
                        Alert("留言成功",2500);
                        self.location='index.php';
                    }

                   // alert(data);
                    }
            });

        });
    }

    function register(){
       var username= $("#register_username").val().trim();
       var password= $("#register_password").val().trim();
       var password1= $("#register_password1").val().trim();
       var email= $("#register_email").val().trim();
       var nickname= $("#register_nickname").val().trim();

        if(username==null || username==""){
            $("#register_username_message").text("用户名不能为空");
            return false;
        }

        if(password==null ||password==""){
            $("#register_password_message").text("密码不能为空");
            return false;
        }

        if(password!=password1){
            $("#register_password1_message").text("两次密码不一致");
            return false;
        }

        if(email==null || email==""){
            $("#register_email_message").text("邮箱不能为空");
            return false;
        }

        if(nickname==null || nickname==""){
            $("#register_nickname_message").text("昵称不能为空");
            return false;
        }

        var datajson='{"username":username ,"password":password ,"email":email,"nickname":nickname}';
        //alert(username+" "+password+" "+password1+" "+email+" "+nickname);
        $(function(){
            var my_data="前台变量";
            my_data=escape(my_data)+"";//编码，防止汉字乱码
            $.ajax({
                url: "control/register.php",
                type: "POST",
                //contentType: "application/json; charset=utf-8",
                data:{"username":username ,"password":password ,"email":email,"nickname":nickname},
                //dataType: "json",
                error: function(){
                    alert('Error loading XML document');
                },
                success: function(data,status){//如果调用php成功
                    switch (data){
                        case "0":
                            self.location='index.php';
                            break;
                        case "1":
                            $("#register_username_message").text("用户名已经存在");
                            break;
                        case "2":
                            $("#register_email_message").text("邮箱已经存在");
                            break;
                        case "3":
                            $("#register_nickname_message").text("昵称已经存在");
                            break;
                    }
                   // alert(unescape(data));//解码，显示汉字
                }
            });

        });
    }
    function login(){
        var username= $("#login_username").val().trim();
        var password= $("#login_password").val().trim();
        if(username==null || username==""){
            $("#login_username_message").text("用户名不能为空");
            return;
        }
        if(password==null || password==""){
            $("#login_password_message").text("密码不能为空");
            return;
        }

        $(function(){
            var my_data="前台变量";
            my_data=escape(my_data)+"";//编码，防止汉字乱码
            $.ajax({
                url: "control/login.php",
                type: "POST",
                //contentType: "application/json; charset=utf-8",
                data:{"username":username ,"password":password},
                //dataType: "json",
                error: function(){
                    alert('Error loading XML document');
                },
                success: function(data,status){//如果调用php成功
                    //0用户名不存在
                    //1登陆成功
                    //2密码错误

                    switch (data){
                        case "1":
                            self.location='index.php';
                            break;
                        case "0":
                            $("#login_username_message").text("用户名错误");
                            break;
                        case "2":
                            $("#login_password_message").text("密码错误");
                            break;
                        default :
                            self.location='index.php';
                            break;
                    }
                    // alert(unescape(data));//解码，显示汉字
                }
            });

        });
    }
</script>
<body>
<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="#">ItisYue的网站</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="#">首页</a></li>
                        <li><a href="#about">关于我</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['flag']->value==0) {?>
                            <li><a data-toggle="modal" href="#login">登陆</a></li>
                            <li><a data-toggle="modal" href="#register">注册</a></li>
                            <?php } else { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">欢迎您:<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="control/logout.php">退出</a></li>
                                </ul>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="height: 100px">
</div>
<article class="container">
    <section class="row" id="travel">
        <div class="span12 panel" style="display: block;">
            <div class="row">
                <div class="span6">
                    <div class="block-left">
                        <h1><?php echo $_smarty_tpl->tpl_vars['fun']->value['title'];?>
</h1>
                        <p class="wo"><?php echo $_smarty_tpl->tpl_vars['fun']->value['content'];?>
</p>
                        <br>
                        <!--<button class="btn" onclick="next()">next</button>-->

                        <!-- 注册Modal start-->
                        <div id="register" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade" style="text-align: center">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h3 id="myModalLabel">注册</h3>
                            </div>
                            <form onsubmit="return register()">
                            <div class="input-group" style="text-align: center">

                                <span class="input-group-addon" id="basic-addon1">用户名:&nbsp</span>
                                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required="required" id="register_username" ><span id="register_username_message" style="color: red"></span><br>

                                <span class="input-group-addon" id="basic-addon2">输入密码:</span>
                                <input type="password" class="form-control" placeholder="请输入密码" aria-describedby="basic-addon1" required="required" id="register_password"><span id="register_password_message" style="color: red"></span><br>

                                <span class="input-group-addon" id="basic-addon3">确认密码:</span>
                                <input type="password" class="form-control" placeholder="请再次输入密码" aria-describedby="basic-addon1" required="required" id="register_password1"><span id="register_password1_message" style="color: red"></span><br>

                                <span class="input-group-addon" >输入邮箱:</span>
                                <input type="email" class="form-control" placeholder="abc@qq.com" aria-describedby="basic-addon1"   required="required" id="register_email">
                                <span id="registe_email_message" style="color: red"></span><br>

                                <span class="input-group-addon" >输入昵称:</span>
                                <input type="text" class="form-control" placeholder="德玛西亚" aria-describedby="basic-addon1" required="required" id="register_nickname">
                                <span id="register_nickname_message" style="color: red"></span><br>

                            </div>
                                <input type="submit" class="btn" value="注册">
                           <!-- <button class="btn" onclick="register()">注册</button>-->
                            </form>
                            <div class="modal-footer">
                                <button aria-hidden="true" data-dismiss="modal" class="btn">关闭</button>
                            </div>
                        </div>
                        <!-- 注册Modal end-->

                        <!-- 登陆Modal start-->
                        <div id="login" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade" style="text-align: center">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h3>登陆</h3>
                            </div>

                            <div class="input-group" style="text-align: center">
                                <span class="input-group-addon" >用户名:&nbsp</span>
                                <input type="text" class="form-control" placeholder="用户名/邮箱" aria-describedby="basic-addon1" required="required" id="login_username">
                                <span id="login_username_message" style="color: red"></span>
                                <br>

                                <span class="input-group-addon">输入密码:</span>
                                <input type="password" class="form-control" placeholder="请输入密码"   aria-describedby="basic-addon1" required="required" id="login_password">
                                <span id="login_password_message" style="color: red"></span>
                                <br>

                            </div>
                            <button class="btn" onclick="login()">登陆</button>
                            <div class="modal-footer">
                                <button aria-hidden="true" data-dismiss="modal" class="btn">关闭</button>
                            </div>
                        </div>
                        <!-- 登陆Modal end-->
                    </div>
                </div>
                <div class="span6">

                    <div style="text-align: right">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['fun']->value['pic'];?>
" height="400" width="400" />
                    </div>
                </div>
            </div>

            <!--留言区域start-->
            <?php if ($_smarty_tpl->tpl_vars['flag']->value==1) {?>
            <div class="row">
                <div class="span6">
                    <div class="block-left">
                        <h1>留言给:<?php echo $_smarty_tpl->tpl_vars['fun']->value['title'];?>
</h1>
                       <textarea rows="5" cols="200" name="message" id="message" style="text-align: left" >
                        </textarea>
                        <br>
                        <button class="btn" onclick="talk()">发表</button>
                    </div>
                </div>
                <div style="text-align: right;float: right">
                        <div id="show_message" style="width:400px; height:400px; overflow:auto; text-align: left">
                            <?php  $_smarty_tpl->tpl_vars['me'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['me']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['me']->key => $_smarty_tpl->tpl_vars['me']->value) {
$_smarty_tpl->tpl_vars['me']->_loop = true;
?>
                                <span>
                                    在<span style="color: #7f0055">
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['me']->value['datetime'],"%Y-%m-%d %H:%M:%S");?>
</span>
                                    <span style="color: #885500"><?php echo $_smarty_tpl->tpl_vars['me']->value['formNickName'];?>
</span>
                                    给<span style="color: #88ff44"><?php echo $_smarty_tpl->tpl_vars['me']->value['toNickName'];?>
</span>留言：
                                </span><br>
                                <?php if ($_smarty_tpl->tpl_vars['me']->value['datetime']%3==0) {?>
                                    <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['me']->value['content'];?>
</span>
                                     <?php } elseif ($_smarty_tpl->tpl_vars['me']->value['datetime']%2==0) {?>
                                     <span style="color: green;"><?php echo $_smarty_tpl->tpl_vars['me']->value['content'];?>
</span>
                                        <?php } else { ?>
                                        <span style="color: blue;"><?php echo $_smarty_tpl->tpl_vars['me']->value['content'];?>
</span>

                                    <?php }?>
                            <hr>
                                 <!--<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['me']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
                                    <p><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</p>
                                 <?php } ?>-->
                            <?php } ?>
                        </div>
                </div>
            </div>
            <?php }?>
            <!--留言区域end-->
        </div>
    </section>
</article>
</body>
</html>
<?php }} ?>