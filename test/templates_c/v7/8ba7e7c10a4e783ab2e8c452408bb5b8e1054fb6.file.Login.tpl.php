<?php /* Smarty version Smarty-3.1.7, created on 2018-09-19 02:04:15
         compiled from "/var/www/onlysites/data/www/test.onlysites.ru/crm-demo/vtiger/includes/runtime/../../layouts/v7/modules/Users/Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4879234245ba17fc930c917-47701676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba7e7c10a4e783ab2e8c452408bb5b8e1054fb6' => 
    array (
      0 => '/var/www/onlysites/data/www/test.onlysites.ru/crm-demo/vtiger/includes/runtime/../../layouts/v7/modules/Users/Login.tpl',
      1 => 1537311847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4879234245ba17fc930c917-47701676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ba17fc933147',
  'variables' => 
  array (
    'MODULE' => 0,
    'ERROR' => 0,
    'MESSAGE' => 0,
    'MAIL_STATUS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba17fc933147')) {function content_5ba17fc933147($_smarty_tpl) {?>


<style>body {background: url(layouts/v7/resources/Images/login-background.jpg);background-position: center;background-size: cover;width: 100%;height: 96%;background-repeat: no-repeat;}hr {margin-top: 15px;background-color: #7C7C7C;height: 2px;border-width: 0;}h3, h4 {margin-top: 0px;}hgroup {text-align:center;margin-top: 4em;}input {font-size: 16px;padding: 10px 10px 10px 0px;-webkit-appearance: none;display: block;color: #636363;width: 100%;border: none;border-radius: 0;border-bottom: 1px solid #757575;}input:focus {outline: none;}label {font-size: 16px;font-weight: normal;position: absolute;pointer-events: none;left: 0px;top: 10px;transition: all 0.2s ease;}input:focus ~ label, input.used ~ label {top: -20px;transform: scale(.75);left: -12px;font-size: 18px;}input:focus ~ .bar:before, input:focus ~ .bar:after {width: 50%;}#page {padding-top: 6%;}.widgetHeight {height: 410px;margin-top: 20px !important;}.loginDiv {width: 380px;margin: 0 auto;border-radius: 4px;box-shadow: 0 0 10px gray;background-color: #FFFFFF;}.marketingDiv {color: #303030;}.separatorDiv {background-color: #7C7C7C;width: 2px;height: 460px;margin-left: 20px;}.user-logo {margin: 0 auto;padding-top: 40px;padding-bottom: 20px;}.blockLink {border: 1px solid #303030;padding: 3px 5px;}.group {position: relative;margin: 20px 20px 40px;}.failureMessage {color: red;display: block;text-align: center;padding: 0px 0px 10px;}.successMessage {color: green;display: block;text-align: center;padding: 0px 0px 10px;}.inActiveImgDiv {padding: 5px;text-align: center;margin: 30px 0px;}.app-footer p {margin-top: 0px;}.footer {background-color: #fbfbfb;height:26px;}.bar {position: relative;display: block;width: 100%;}.bar:before, .bar:after {content: '';width: 0;bottom: 1px;position: absolute;height: 1px;background: #35aa47;transition: all 0.2s ease;}.bar:before {left: 50%;}.bar:after {right: 50%;}.button {position: relative;display: inline-block;padding: 9px;margin: .3em 0 1em 0;width: 100%;vertical-align: middle;color: #fff;font-size: 16px;line-height: 20px;-webkit-font-smoothing: antialiased;text-align: center;letter-spacing: 1px;background: transparent;border: 0;cursor: pointer;transition: all 0.15s ease;}.button:focus {outline: 0;}.buttonBlue {background-image: linear-gradient(to bottom, #35aa47 0px, #35aa47 100%)}.ripples {position: absolute;top: 0;left: 0;width: 100%;height: 100%;overflow: hidden;background: transparent;}.padding-20{padding: 20px 0 0 0;}.linksNavBar {position: absolute;top: 0px;right: 15px;}.helpLinks{float: right;margin-top: 20px;background: #efefef;border: 1px solid #fff;padding: 5px;border-radius: 5px;box-shadow: -2px 0 3px;}.helpLinks a{padding: 10px;}.footer-icons{position: absolute;bottom: -24px;right: 10px;text-align: right;min-width: 280px;}//Animations@keyframes inputHighlighter {from {background: #4a89dc;}to 	{width: 0;background: transparent;}}@keyframes ripples {0% {opacity: 0;}25% {opacity: 1;}100% {width: 200%;padding-bottom: 200%;opacity: 0;}}</style><div class="linksNavBar"><div class="helpLinks"><a href="http://community.salesplatform.ru/"><?php echo vtranslate('LBL_COMMUNITY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a> |<a href="http://community.salesplatform.ru/forums/"><?php echo vtranslate('LBL_FORUMS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a> |<a href="http://salesplatform.ru/wiki/index.php/SalesPlatform_vtiger_crm_7"><?php echo vtranslate('LBL_WIKI',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a> |<a href="http://community.salesplatform.ru/blogs/"><?php echo vtranslate('LBL_BLOGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a> |<a href="http://salesplatform.ru/">SalesPlatform.ru</a></div></div><span class="app-nav"></span><div class="col-lg-12"><div class="loginDiv widgetHeight"><div class="padding-20"></div><div><span class="<?php if (!$_smarty_tpl->tpl_vars['ERROR']->value){?>hide<?php }?> failureMessage" id="validationMessage"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</span><span class="<?php if (!$_smarty_tpl->tpl_vars['MAIL_STATUS']->value){?>hide<?php }?> successMessage"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</span></div><div id="loginFormDiv"><form class="form-horizontal" method="POST" action="index.php"><input type="hidden" name="module" value="Users"/><input type="hidden" name="action" value="Login"/><div class="group"><input id="username" type="text" name="username"><span class="bar"></span><label><?php echo vtranslate('User Name',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="group"><input id="password" type="password" name="password"><span class="bar"></span><label><?php echo vtranslate('Password',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="group"><button type="submit" class="button buttonBlue"><?php echo vtranslate('LBL_SING_IN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><br><a class="forgotPasswordLink" style="color: #15c;"><?php echo vtranslate('ForgotPassword',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></form></div><div id="forgotPasswordDiv" class="hide"><form class="form-horizontal" action="forgotPassword.php" method="POST"><div class="group"><input id="username" type="text" name="username"><span class="bar"></span><label><?php echo vtranslate('User Name',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="group"><input id="email" type="email" name="emailId"><span class="bar"></span><label>E-mail</label></div><div class="group"><button type="submit" class="button buttonBlue forgot-submit-btn"><?php echo vtranslate('LBL_SUBMIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><br><span><?php echo vtranslate('LBL_ENTER_AND_SUBMIT_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<a class="forgotPasswordLink pull-right" style="color: #15c;"><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></div></form></div></div></div><script>jQuery(document).ready(function () {var validationMessage = jQuery('#validationMessage');var forgotPasswordDiv = jQuery('#forgotPasswordDiv');var loginFormDiv = jQuery('#loginFormDiv');loginFormDiv.find('#password').focus();loginFormDiv.find('a').click(function () {loginFormDiv.toggleClass('hide');forgotPasswordDiv.toggleClass('hide');validationMessage.addClass('hide');});forgotPasswordDiv.find('a').click(function () {loginFormDiv.toggleClass('hide');forgotPasswordDiv.toggleClass('hide');validationMessage.addClass('hide');});loginFormDiv.find('button').on('click', function () {var username = loginFormDiv.find('#username').val();var password = jQuery('#password').val();var result = true;var errorMessage = '';if (username === '') {errorMessage = 'Please enter valid username';result = false;} else if (password === '') {errorMessage = 'Please enter valid password';result = false;}if (errorMessage) {validationMessage.removeClass('hide').text(errorMessage);}return result;});forgotPasswordDiv.find('button').on('click', function () {var username = jQuery('#forgotPasswordDiv #fusername').val();var email = jQuery('#email').val();var email1 = email.replace(/^\s+/, '').replace(/\s+$/, '');var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/;var illegalChars = /[\(\)\<\>\,\;\:\\\"\[\]]/;var result = true;var errorMessage = '';if (username === '') {errorMessage = 'Please enter valid username';result = false;} else if (!emailFilter.test(email1) || email == '') {errorMessage = 'Please enter valid email address';result = false;} else if (email.match(illegalChars)) {errorMessage = 'The email address contains illegal characters.';result = false;}if (errorMessage) {validationMessage.removeClass('hide').text(errorMessage);}return result;});jQuery('input').blur(function (e) {var currentElement = jQuery(e.currentTarget);if (currentElement.val()) {currentElement.addClass('used');} else {currentElement.removeClass('used');}});var ripples = jQuery('.ripples');ripples.on('click.Ripples', function (e) {jQuery(e.currentTarget).addClass('is-active');});ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function (e) {jQuery(e.currentTarget).removeClass('is-active');});loginFormDiv.find('#username').focus();var slider = jQuery('.bxslider').bxSlider({auto: true,pause: 4000,nextText: "",prevText: "",autoHover: true});jQuery('.bx-prev, .bx-next, .bx-pager-item').live('click',function(){ slider.startAuto(); });jQuery('.bx-wrapper .bx-viewport').css('background-color', 'transparent');jQuery('.bx-wrapper .bxslider li').css('text-align', 'left');jQuery('.bx-wrapper .bx-pager').css('bottom', '-15px');var params = {theme		: 'dark-thick',setHeight	: '100%',advanced	:	{autoExpandHorizontalScroll:true,setTop: 0}};jQuery('.scrollContainer').mCustomScrollbar(params);});</script></div><?php }} ?>