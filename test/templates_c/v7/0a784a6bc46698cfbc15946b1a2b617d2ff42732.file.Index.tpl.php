<?php /* Smarty version Smarty-3.1.7, created on 2018-09-26 01:11:03
         compiled from "/var/www/onlysites/data/www/test.onlysites.ru/crm-demo/vtiger/includes/runtime/../../layouts/v7/modules/Settings/Search/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11728139805baab27779f5a9-29763156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a784a6bc46698cfbc15946b1a2b617d2ff42732' => 
    array (
      0 => '/var/www/onlysites/data/www/test.onlysites.ru/crm-demo/vtiger/includes/runtime/../../layouts/v7/modules/Settings/Search/Index.tpl',
      1 => 1524059126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11728139805baab27779f5a9-29763156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'ModulesEntity' => 0,
    'key' => 0,
    'Fields' => 0,
    'item' => 0,
    'Field' => 0,
    'fieldTab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5baab2777d0dd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baab2777d0dd')) {function content_5baab2777d0dd($_smarty_tpl) {?>
<style type="text/css">
	.visibility{
		visibility: hidden;
	}
	.turn_off{
		min-width: 20px;
	}
</style>
<?php $_smarty_tpl->tpl_vars["ModulesEntity"] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModulesEntity(), null, 0);?><?php $_smarty_tpl->tpl_vars["Fields"] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFieldFromModule(), null, 0);?><div><div class="widget_header row-fluid"><div class="col-md-10"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3><?php echo vtranslate('LBL_Module_desc',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-2"></div></div><hr><div class="SearchFieldsEdit"><div class="btn-toolbar"><span class="pull-right group-desc "><button class="btn btn-success saveModuleSequence hide" type="button"><strong><?php echo vtranslate('LBL_SAVE_MODULE_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><div class="clearfix"></div></div><div class="contents tabbable"><table class="table table-bordered table-condensed listViewEntriesTable" id="modulesEntity"><thead><tr class="blockHeader"><th><strong><?php echo vtranslate('Module',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo vtranslate('LabelFields',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo vtranslate('SearchFields',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo vtranslate('LBL_SEARCH_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo vtranslate('LBL_SAVE_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th colspan="2"><strong><?php echo vtranslate('LBL_ACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ModulesEntity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><?php $_smarty_tpl->tpl_vars["Field"] = new Smarty_variable($_smarty_tpl->tpl_vars['Fields']->value[$_smarty_tpl->tpl_vars['key']->value], null, 0);?><tr data-tabid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><td><span>&nbsp;<a><img src="<?php echo vimage_path('drag.png');?>
" border="0" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a>&nbsp;</span><?php echo vtranslate($_smarty_tpl->tpl_vars['item']->value['modulename'],$_smarty_tpl->tpl_vars['item']->value['modulename']);?>
</td><td><select multiple class="select2 select2-offscreen col-md-7 fieldname" name="fieldname"><?php  $_smarty_tpl->tpl_vars['fieldTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldTab']->key => $_smarty_tpl->tpl_vars['fieldTab']->value){
$_smarty_tpl->tpl_vars['fieldTab']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['fieldTab']->value['columnname'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['displayfield']!=''){?> <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->compare_vale($_smarty_tpl->tpl_vars['item']->value['displayfield'],$_smarty_tpl->tpl_vars['fieldTab']->value['columnname'])){?>selected<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->compare_vale($_smarty_tpl->tpl_vars['item']->value['fieldname'],$_smarty_tpl->tpl_vars['fieldTab']->value['columnname'])){?>selected<?php }?><?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['fieldTab']->value['fieldlabel'],$_smarty_tpl->tpl_vars['item']->value['modulename']);?>
</option><?php } ?></select></td><td><select multiple class="select2 select2-offscreen col-md-7 searchcolumn" name="searchcolumn"><?php  $_smarty_tpl->tpl_vars['fieldTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldTab']->key => $_smarty_tpl->tpl_vars['fieldTab']->value){
$_smarty_tpl->tpl_vars['fieldTab']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['fieldTab']->value['columnname'];?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->compare_vale($_smarty_tpl->tpl_vars['item']->value['searchcolumn'],$_smarty_tpl->tpl_vars['fieldTab']->value['columnname'])){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['fieldTab']->value['fieldlabel'],$_smarty_tpl->tpl_vars['item']->value['modulename']);?>
</option><?php } ?></select></td><td><?php if ($_smarty_tpl->tpl_vars['item']->value['searchall']==1){?><input type="checkbox" name="globalsearchall" class="globalsearchall" id="globalsearchall" checked="checked" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['searchall'];?>
">&nbsp;<?php echo vtranslate('LBL_SEARCH_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><input type="checkbox" name="globalsearchall"  class="globalsearchall" id="globalsearchall" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['searchall'];?>
">&nbsp;<?php echo vtranslate('LBL_SEARCH_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></td><td><button class="btn marginLeftZero updateLabels btn-info" data-tabid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo vtranslate('Update labels',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></td><td><button name="turn_off" class="btn marginLeftZero turn_off <?php if ($_smarty_tpl->tpl_vars['item']->value['turn_off']==1){?>btn-success<?php }else{ ?>btn-danger<?php }?>" style="min-width:40px" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['turn_off'];?>
" ><?php if ($_smarty_tpl->tpl_vars['item']->value['turn_off']==1){?><?php echo vtranslate('LBL_TURN_OFF',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_TURN_ON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></button></td></tr><?php } ?></tbody></table></div><div class="clearfix"></div></div></div>
<?php }} ?>