<?php

/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: SalesPlatform Ltd
 * The Initial Developer of the Original Code is SalesPlatform Ltd.
 * All Rights Reserved.
 * If you have any questions or comments, please email: devel@salesplatform.ru
 ************************************************************************************/

class Settings_SPTips_ListRules_View extends Settings_Vtiger_Index_View {
    
    const moduleRuleTable = 'sp_tips_module_rules';
    const dependentFieldsTable = 'sp_tips_dependent_fields';
    
    public function process(Vtiger_Request $request) {
        
        $qualifiedModuleName = $request->getModule(false);
        
        $existingProviders = Settings_SPTips_Provider_Model::getAllProviders();
        if (!$request->get('selectedProvider')) {
            $currentProviderInstance = Settings_SPTips_Provider_Model::getInstance();
            $providerId = $currentProviderInstance->get('provider_id');
        }
        else {
            $providerId = Settings_SPTips_Provider_Model::getProviderIdByName($request->get('selectedProvider'));
        }
        
        $existingRules = $this->getAllRulesByProvider($providerId);
        
        $viewer = $this->getViewer($request);
        $viewer->assign('QUALIFIED_MODULE', $qualifiedModuleName);
        $viewer->assign('EXISTING_RULES', $existingRules);
        
        $viewer->assign('EXISTING_PROVIDERS', $existingProviders);
        $viewer->assign('CURRENT_PROVIDER_ID', $providerId);
        $viewer->view('RulesTable.tpl',$qualifiedModuleName);
    }
    
    public function getAllRulesByProvider($providerId) {
        $adb = PearDatabase::getInstance();
        $sql = 'SELECT * FROM ' . Settings_SPTips_ListRules_View::moduleRuleTable . ' WHERE provider_id=?';
        
        $result = $adb->pquery($sql, array($providerId));
        $existingRules = array();
        while($row = $adb->fetch_array($result)) {
            $ruleId = $row['rule_id'];
            $moduleName = $row['module'];
            
            $sourceFieldLabel = $this->getLabelForCurrentField($row['field'], $moduleName);
            if (isset($sourceFieldLabel)) {
                $sourceField = $sourceFieldLabel;
            }
            else {
                $sourceField = $row['field'];
            }
            $sourceProviderField = $row['provider_field'];
            $dependentFields = $this->getAllDependentFieldsForCurrentModule($ruleId, $moduleName);
            $providerFields = $this->getProviderFieldsForSelectedRule($ruleId);
            
            $recordModel = Settings_SPTips_Rule_Model::getInstance($ruleId, $moduleName, $sourceField, $sourceProviderField, $dependentFields, $providerFields);
            $existingRules[] = $recordModel;
            
        }
        return $existingRules;
        
    }
    
    public function getAllDependentFieldsForCurrentModule($ruleId, $moduleName) {
        $adb = PearDatabase::getInstance();
        
        $sql = 'SELECT vtiger_field.fieldname, vtiger_field.fieldlabel FROM vtiger_field JOIN ';
        $sql .= Settings_SPTips_ListRules_View::dependentFieldsTable . ' ON ';
        $sql .= Settings_SPTips_ListRules_View::dependentFieldsTable . '.vtiger_fieldname = vtiger_field.fieldname WHERE ';
        $sql .= Settings_SPTips_ListRules_View::dependentFieldsTable . '.rule_id = ? AND vtiger_field.tabid = ?';
        
        $fieldsResult = $adb->pquery($sql, array($ruleId, getTabid($moduleName)));
        $numOfRows = $adb->num_rows($fieldsResult);
        
        $dependentFields = array();
        if ($numOfRows) {
            while($row = $adb->fetch_array($fieldsResult)) {
                $dependentFields[$row['fieldname']] = $row['fieldlabel'];
            }
        }
        return $dependentFields;
    }
    
    public function getLabelForCurrentField($fieldName, $moduleName) {
        $adb = PearDatabase::getInstance();
        $sql = 'SELECT fieldlabel FROM vtiger_field WHERE tabid = ? AND fieldname = ?';
        $result = $adb->pquery($sql, array(getTabid($moduleName), $fieldName));
        if ($result) {
            return $adb->query_result($result, 0);
        }
        else {
            return null;
        }
    }
    
    public function getProviderFieldsForSelectedRule($ruleId) {
        $adb = PearDatabase::getInstance();
        $sql = 'SELECT vtiger_fieldname, provider_fieldname FROM ' . Settings_SPTips_ListRules_View::dependentFieldsTable . ' WHERE rule_id = ?';
        $result = $adb->pquery($sql, array($ruleId));
        $providerFields = array();
        if ($result) {
            while($row = $adb->fetch_array($result)) {
                $providerFields[$row['vtiger_fieldname']] = $row['provider_fieldname'];
            }   
        }
        return $providerFields;
    }
    
}