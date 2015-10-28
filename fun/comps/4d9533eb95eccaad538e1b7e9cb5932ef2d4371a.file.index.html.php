<?php /* Smarty version Smarty-3.1.17, created on 2015-10-28 13:52:00
         compiled from "C:\env\wamp\www\php\fun\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:102975630361e8f4812-58595659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d9533eb95eccaad538e1b7e9cb5932ef2d4371a' => 
    array (
      0 => 'C:\\env\\wamp\\www\\php\\fun\\templates\\index.html',
      1 => 1446040289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102975630361e8f4812-58595659',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5630361e9fa8a9_07888006',
  'variables' => 
  array (
    'flag' => 0,
    'nickname' => 0,
    'fun' => 0,
    'friends' => 0,
    'friend' => 0,
    'message' => 0,
    'me' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5630361e9fa8a9_07888006')) {function content_5630361e9fa8a9_07888006($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\env\\wamp\\www\\php\\fun\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">欢迎您:<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
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
                <!--最新笑话，动态，新闻，等   start-->
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
                <!--最新笑话，动态，新闻，等   end-->

                <!--最新笑话，动态，新闻的图片   start-->
                <div class="span6">
                    <div style="text-align: right">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['fun']->value['pic'];?>
" height="400" width="400" />
                    </div>
                </div>
                <!--最新笑话，动态，新闻的图片   end-->
            </div>
            <!--<div style="border-bottom:1px dashed;color: red"></div>-->
        </div>

        <!--留言区域start-->
        <?php if ($_smarty_tpl->tpl_vars['flag']->value==1) {?>
        <div class="span12 panel" style="display: block;">
            <div class="row">
                <div class="span6">
                    <div class="block-left">
                        <h1>留言给:</h1>
                        <select id="friendid">
                            <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['friend']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value['nickname'];?>
</option>
                            <?php } ?>
                        </select>


                       <textarea rows="5" cols="200" name="message" id="message" style="text-align: left" >
                        </textarea>
                        <br>
                        <button class="btn" onclick="talk()">发表</button>
                    </div>
                </div>
                <div style="text-align: right;float: right">
                    <h2 style="text-align: center">留言板</h2>
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
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <!--留言区域end-->
    </section>


    <section class="row">
        <!--时间轴  start-->
        <?php if ($_smarty_tpl->tpl_vars['flag']->value==1&&($_smarty_tpl->tpl_vars['username']->value=='fangyue'||$_smarty_tpl->tpl_vars['username']->value=='lvqinyan')) {?>
        <div class="span12 panel" style="display: block;text-align: center">
            <div class="row" style="text-align: center" id="timezone">
                <button class="btn btn-primary" type="button">
                    时间轴： <span class="badge">1/9</span>
                </button>
                <button type="button" class="btn"><a style="color: #040404">08:00以前</a></button>
                <button type="button" class="btn"><a style="color: #040404">08:00</a></button>
                <button type="button" class="btn"><a style="color: #040404">10:00</a></button>
                <button type="button" class="btn"><a style="color: #040404">12:00</a></button>
                <button type="button" class="btn"><a style="color: #040404">14:00</a></button>
                <button type="button" class="btn"><a style="color: #040404">16:00</a></button>
                <button type="button" class="btn"><a style="color: #040404">18:00</a></button>
                <button type="button" class="btn"><a style="color: #040404">20:00</a></button>
                <button type="button" class="btn"><a style="color: #040404">20:00以后</a></button>
            </div>
        </div>
        <?php }?>
        <!--时间轴  end-->

        <!--根据生日预测结婚  start-->
        <div class="span12 panel" style="display: block;text-align: center">
            <div class="row" style="text-align: center" id="birthday">
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="input-group">
                        <h1 style="color: #00cc00">从出生年月看你几岁结婚？准到你尖叫！！！</h1>
                        <span style="color: red;font-size: large">选择你的年龄(00后略过哟):</span><input type="date" class="form-control" placeholder="请输入阴历(农历)生日" id="jisuanbirthday">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="jisuanBirthday()">Go!</button>
                          </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
                <div class="span12" >
                    <div style="text-align: center" id="showbirthday">

                    </div>
                </div>

            </div>
        </div>
        <!--根据生日预测结婚  end-->
    </section>


</article>

</body>
<script>
    timezone();

</script>
</html>
<?php }} ?>
