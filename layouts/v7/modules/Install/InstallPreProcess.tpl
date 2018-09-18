{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{*SalesPlatform.ru begin*}
<div id="js_strings" class="hide noprint">{Zend_Json::encode($LANGUAGE_STRINGS)}</div>
{*SalesPlatform.ru end*}
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row head">
		<div class="col-sm-6">
			<div class="logo">
				<img src="{'logo.png'|vimage_path}"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="pull-right">
				<h3>{vtranslate('LBL_INSTALLATION_WIZARD', 'Install')}</h3>
			</div>
		</div>
	</div>
