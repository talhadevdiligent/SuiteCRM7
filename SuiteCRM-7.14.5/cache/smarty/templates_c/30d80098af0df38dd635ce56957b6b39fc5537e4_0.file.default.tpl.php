<?php
/* Smarty version 4.3.1, created on 2024-09-02 13:27:52
  from 'C:\wamp64\www\SuiteCRM7\SuiteCRM-7.14.5\modules\Alerts\templates\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5bd5867ef33_06406747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30d80098af0df38dd635ce56957b6b39fc5537e4' => 
    array (
      0 => 'C:\\wamp64\\www\\SuiteCRM7\\SuiteCRM-7.14.5\\modules\\Alerts\\templates\\default.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5bd5867ef33_06406747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\SuiteCRM7\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'C:\\wamp64\\www\\SuiteCRM7\\SuiteCRM-7.14.5\\include\\Smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
echo $_smarty_tpl->tpl_vars['Flash']->value;?>


<?php if (!$_smarty_tpl->tpl_vars['Flash']->value) {?>
<div class="clear-all-alerts-container">
    <a class="clear-all-alerts-btn btn btn-warning btn-xs"><?php echo smarty_function_sugar_translate(array('label'=>"LBL_CLEARALL"),$_smarty_tpl);?>
</a>
    
    <?php echo '<script'; ?>
>
          $('.clear-all-alerts-btn').unbind('click').click(function (event) {
            $('.desktop_notifications:first .alert-dismissible .close').each(function (i, v) {
              $(v).click();
            });
          });
    <?php echo '</script'; ?>
>
    
</div>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
    <div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['result']->value->type != null) {
echo $_smarty_tpl->tpl_vars['result']->value->type;
} else { ?>info<?php }?> alert-dismissible module-alert" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="Alerts.prototype.markAsRead('<?php echo $_smarty_tpl->tpl_vars['result']->value->id;?>
');"><span aria-hidden="true">&times;</span></button>
        <h4 class="alert-header">
        <?php if ($_smarty_tpl->tpl_vars['result']->value->url_redirect != null && !(strstr($_smarty_tpl->tpl_vars['result']->value->url_redirect,"fake_"))) {?>
        <a class="alert-link text-<?php if ($_smarty_tpl->tpl_vars['result']->value->type != null) {
echo $_smarty_tpl->tpl_vars['result']->value->type;
} else { ?>info<?php }?>" href="index.php?module=Alerts&action=redirect&record=<?php echo $_smarty_tpl->tpl_vars['result']->value->id;?>
">
        <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['result']->value->target_module != null) {?>
                                <span class="suitepicon suitepicon-module-<?php echo smarty_modifier_replace(mb_strtolower((string) $_smarty_tpl->tpl_vars['result']->value->target_module, 'UTF-8'),'_','-');
if (substr($_smarty_tpl->tpl_vars['result']->value->target_module,-1) !== 's') {?>s<?php }?>"></span>
                <strong class="text-<?php if ($_smarty_tpl->tpl_vars['result']->value->type != null) {
echo $_smarty_tpl->tpl_vars['result']->value->type;
} else { ?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['result']->value->target_module;?>
</strong>
            <?php } else { ?>
                <strong class="text-<?php if ($_smarty_tpl->tpl_vars['result']->value->type != null) {
echo $_smarty_tpl->tpl_vars['result']->value->type;
} else { ?>info<?php }?>">Alert</strong>
            <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['result']->value->url_redirect != null) {?>
        </a>
        <?php }?>
        </h4>
        <p class="alert-body">
            <?php echo nl2br((string) $_smarty_tpl->tpl_vars['result']->value->name, (bool) 1);?>
<br/>
            <?php echo nl2br((string) $_smarty_tpl->tpl_vars['result']->value->description, (bool) 1);?>

        </p>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
