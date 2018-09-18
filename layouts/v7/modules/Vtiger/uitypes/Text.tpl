{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is: vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
{strip}
{assign var="FIELD_INFO" value=$FIELD_MODEL->getFieldInfo()}
{assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
{if (!$FIELD_NAME)}
  {assign var="FIELD_NAME" value=$FIELD_MODEL->getFieldName()}
{/if}
{if $FIELD_MODEL->get('uitype') eq '19' || $FIELD_MODEL->get('uitype') eq '20'}
    {* SalesPlatform.ru begin *}
    {* <textarea rows="3" class="inputElement textAreaElement col-lg-12 {if $FIELD_MODEL->isNameField()}nameField{/if}" name="{$FIELD_NAME}" {if $FIELD_NAME eq "notecontent"}id="{$FIELD_NAME}"{/if} data-validation-engine="validate[{if $FIELD_MODEL->isMandatory() eq true}required,{/if}funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-fieldinfo='{$FIELD_INFO}' {if !empty($SPECIAL_VALIDATOR)}data-validator={Zend_Json::encode($SPECIAL_VALIDATOR)}{/if}> *}	
	<textarea rows="3" id="{$MODULE}_editView_fieldName_{$FIELD_NAME}" class="inputElement textAreaElement col-lg-12 {if $FIELD_MODEL->isNameField()}nameField{/if} {if $FIELD_MODEL->isCKEEnabled()}sp_cke_field{/if}" name="{$FIELD_NAME}" {if $FIELD_NAME eq "notecontent"}id="{$FIELD_NAME}"{/if} {if !empty($SPECIAL_VALIDATOR)}data-validator='{Zend_Json::encode($SPECIAL_VALIDATOR)}'{/if}
        {if $FIELD_INFO["mandatory"] eq true} data-rule-required="true" {/if}
        {if count($FIELD_INFO['validator'])}
            data-specific-rules='{ZEND_JSON::encode($FIELD_INFO["validator"])}'
        {/if}
        >
	{* SalesPlatform.ru end *}
    {$FIELD_MODEL->get('fieldvalue')}</textarea>
{else}
        <textarea rows="5" id="{$MODULE}_editView_fieldName_{$FIELD_NAME}" class="inputElement {if $FIELD_MODEL->isNameField()}nameField{/if}" name="{$FIELD_NAME}" {if !empty($SPECIAL_VALIDATOR)}data-validator='{Zend_Json::encode($SPECIAL_VALIDATOR)}'{/if}
        {if $FIELD_INFO["mandatory"] eq true} data-rule-required="true" {/if}
        {if count($FIELD_INFO['validator'])}
            data-specific-rules='{ZEND_JSON::encode($FIELD_INFO["validator"])}'
        {/if}
        >
    {$FIELD_MODEL->get('fieldvalue')}</textarea>
{/if}
{/strip}
