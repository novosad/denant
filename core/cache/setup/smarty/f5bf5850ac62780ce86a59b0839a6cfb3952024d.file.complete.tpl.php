<?php /* Smarty version Smarty-3.0.4, created on 2015-09-03 21:51:23
         compiled from "Z:/home/denant.loc/www/setup/templates/complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1550755e85e6ba98c67-02491162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5bf5850ac62780ce86a59b0839a6cfb3952024d' => 
    array (
      0 => 'Z:/home/denant.loc/www/setup/templates/complete.tpl',
      1 => 1439929490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1550755e85e6ba98c67-02491162',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form id="install" action="?action=complete" method="post">
<div>
	<h2><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['thank_installing']) ? $_smarty_tpl->getVariable('_lang')->value['thank_installing'] : null);?>
<?php echo $_smarty_tpl->getVariable('app_name')->value;?>
.</h2>

    <?php if ($_smarty_tpl->getVariable('errors')->value){?>
    <div class="note">
    <h3><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['cleanup_errors_title']) ? $_smarty_tpl->getVariable('_lang')->value['cleanup_errors_title'] : null);?>
</h3>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
?>
            <p><?php echo (isset($_smarty_tpl->tpl_vars['error']->value) ? $_smarty_tpl->tpl_vars['error']->value : null);?>
</p><hr />
        <?php }} ?>
    </div>
    <br />
    <?php }?>
	<p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['please_select_login']) ? $_smarty_tpl->getVariable('_lang')->value['please_select_login'] : null);?>
</p>
</div>
<br />

<div class="setup_navbar">
    <label><input type="submit" id="modx-next" name="proceed" value="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login']) ? $_smarty_tpl->getVariable('_lang')->value['login'] : null);?>
" autofocus="autofocus" /></label>
    <br /><br />
    <span class="cleanup">
        <label><input type="checkbox" value="1" id="cleanup" name="cleanup"<?php if ($_smarty_tpl->getVariable('cleanup')->value){?> checked="checked"<?php }?> /> <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['delete_setup_dir']) ? $_smarty_tpl->getVariable('_lang')->value['delete_setup_dir'] : null);?>
</label>
    </span>
</div>
</form>