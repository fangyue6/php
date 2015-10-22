<?php /* Smarty version Smarty-3.1.17, created on 2015-10-22 07:42:30
         compiled from "C:\env\wamp\www\php\PHPStudy\18Smarty\4--9\views\7_8.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3255156289366c74779-40264355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a7913b95399b505f0a88deecb645d4a0ac35d5' => 
    array (
      0 => 'C:\\env\\wamp\\www\\php\\PHPStudy\\18Smarty\\4--9\\views\\7_8.tpl',
      1 => 1445499561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3255156289366c74779-40264355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_56289366d451c9_79957292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56289366d451c9_79957292')) {function content_56289366d451c9_79957292($_smarty_tpl) {?><table border="1" width="800" align="center">
    <caption><h1>用户表</h1></caption>

    <tr>
        <th>index</th>
        <th>iteration</th>
        <th>ID</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>SEX</th>
        <th>EMAIL</th>
    </tr>

    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["u"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['name'] = "u";
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['step'] = ((int) 3) == 0 ? 1 : (int) 3;
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['start'] = (int) 8;
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["u"]['total']);
?>

    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['u']['first']) {?>
    <tr bgcolor="red">
        <?php } elseif ($_smarty_tpl->getVariable('smarty')->value['section']['u']['last']) {?>
    <tr bgcolor="blue">
        <?php } elseif (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['u']['iteration'])) {?>
    <tr bgcolor="green">
        <?php } else { ?>
    <tr>
    <?php }?>

    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['u']['index'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['u']['iteration'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['age'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['sex'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['u']['index']]['email'];?>
</td>
    </tr>
    <?php endfor; else: ?>
    数组为空或不存在
    <?php endif; ?>
</table>

<?php }} ?>
