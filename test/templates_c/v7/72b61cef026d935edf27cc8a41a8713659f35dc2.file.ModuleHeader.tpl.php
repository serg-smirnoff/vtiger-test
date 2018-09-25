<?php /* Smarty version Smarty-3.1.7, created on 2018-09-19 15:13:06
         compiled from "/var/www/onlysites/data/www/test.onlysites.ru/crm-demo/vtiger/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/ModuleHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7108064025ba23d52dcbf66-22646501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72b61cef026d935edf27cc8a41a8713659f35dc2' => 
    array (
      0 => '/var/www/onlysites/data/www/test.onlysites.ru/crm-demo/vtiger/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/ModuleHeader.tpl',
      1 => 1524059133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7108064025ba23d52dcbf66-22646501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'PASSWORD_STATUS' => 0,
    'QUALIFIED_MODULE' => 0,
    'CUSTOMER_PROFILE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ba23d52dd496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba23d52dd496')) {function content_5ba23d52dd496($_smarty_tpl) {?>

<div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop"><div class="module-action-content clearfix"><div class="col-lg-4 col-md-4"><h4 title="<?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
" class="module-title pull-left text-uppercase"> <?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
 </h4></div><div class="col-lg-8 col-md-8"><div class="navbar-right"><ul class="nav navbar-nav"><li><?php if (!($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?><button class="btn btn-default module-buttons" type="button" id="logintoMarketPlace"><div class="fa fa-sign-in" aria-hidden="true"></div>&nbsp;&nbsp;<?php echo vtranslate('LBL_LOGIN_TO_MARKET_PLACE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }else{ ?><button class="btn btn-default module-buttons" type="button" id="<?php if (!empty($_smarty_tpl->tpl_vars['CUSTOMER_PROFILE']->value['CustomerCardId'])){?>updateCardDetails<?php }else{ ?>setUpCardDetails<?php }?>"><div class="fa fa-credit-card" aria-hidden="true"></div>&nbsp;&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['CUSTOMER_PROFILE']->value['CustomerCardId'])){?><?php echo vtranslate('LBL_UPDATE_CARD_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_SETUP_CARD_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></button><?php }?></li></ul></div></div></div></div><?php }} ?>