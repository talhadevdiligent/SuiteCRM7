<?php
/* Smarty version 4.3.1, created on 2024-09-02 13:27:09
  from 'C:\wamp64\www\SuiteCRM7\SuiteCRM-7.14.5\themes\SuiteP\tpls\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5bd2d96b2a9_12889789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c8083b2169d2ecbbbce87bfdca8551857a353bd' => 
    array (
      0 => 'C:\\wamp64\\www\\SuiteCRM7\\SuiteCRM-7.14.5\\themes\\SuiteP\\tpls\\footer.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5bd2d96b2a9_12889789 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
</div>
<!-- END of container-fluid, pageContainer divs -->
<!-- Start Footer Section -->
<?php if ($_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>
    <!-- Start generic footer -->
    <footer>
        <div id="copyright_data" class="footer_left">
            <div id="dialog2" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SUITE_SUPERCHARGED'];?>
" style="display: none">
                <p><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SUITE_DESC1'];?>
</p>
                <br>
                <p><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SUITE_DESC2'];?>
</p>
                <br>
                <p><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SUITE_DESC3'];?>
</p>
                <br>
            </div>
            <div id="dialog" title="&copy; <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SUITE_POWERED_BY'];?>
" style="display: none">
                <p><?php echo $_smarty_tpl->tpl_vars['COPYRIGHT']->value;?>
</p>
            </div>
            <div id="copyrightbuttons">
                <a id="admin_options">&copy; <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SUITE_SUPERCHARGED'];?>
</a>
                <a id="powered_by">&copy; <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SUITE_POWERED_BY'];?>
</a>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['STATISTICS']->value) {?>
        <div class="serverstats">
            <span class="glyphicon glyphicon-globe"></span> <?php echo $_smarty_tpl->tpl_vars['STATISTICS']->value;?>

        </div>
        <?php }?>
    	<div class="footer_right">
    		
    		<a onclick="SUGAR.util.top();" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SUITE_TOP'];?>
<span class="suitepicon suitepicon-action-above"></span> </a>
    	</div>
    </footer>
    <!-- END Generic Footer -->
<?php }?>
<!-- END Footer Section -->

    <?php echo '<script'; ?>
>
        SUGAR_callsInProgress++;
        SUGAR._ajax_hist_loaded = true;
        if (SUGAR.ajaxUI)
            YAHOO.util.Event.onContentReady('ajaxUI-history-field', SUGAR.ajaxUI.firstLoad);

        $(function(){

            // fix for campaign wizard
            if($('#wizard').length) {

                // footer fix
                var bodyHeight = $('body').height();
                var contentHeight = $('#pagecontent').height() + $('#wizard').height();
                var fieldsetHeight = $('#pagecontent').height() + $('#wizard fieldset').height();
                var height = bodyHeight < contentHeight ? contentHeight : bodyHeight;
                if(fieldsetHeight > height) {
                    height = fieldsetHeight;
                }
                height += 50;
                $('#content').css({
                    'min-height': height + 'px'
                });
            }
        });

    <?php echo '</script'; ?>
>

</div>
<div class="modal fade modal-generic" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="title-generic"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_GENERATE_PASSWORD_BUTTON_TITLE'];?>
</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL'];?>
</button>
                <button id="btn-generic" class="btn btn-danger" type="button"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_OK'];?>
</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</body>
</html>
<?php }
}
