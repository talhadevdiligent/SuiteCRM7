<?php
/* Smarty version 4.3.1, created on 2024-09-02 13:27:08
  from 'C:\wamp64\www\SuiteCRM7\SuiteCRM-7.14.5\include\utils\recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d5bd2cd01058_95525779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f584b8380dbe05bd5244367f2b12c830781e919b' => 
    array (
      0 => 'C:\\wamp64\\www\\SuiteCRM7\\SuiteCRM-7.14.5\\include\\utils\\recaptcha_disabled.tpl',
      1 => 1723532450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5bd2cd01058_95525779 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
