/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 * modified by crm-now
 *************************************************************************************************************************************/
var Settings_Index_Js = {
	updatedBlockFieldsList: [],
	initEvents: function () {
		$('.SearchFieldsEdit .fieldname').change(Settings_Index_Js.save);
		$('.SearchFieldsEdit .searchcolumn').change(Settings_Index_Js.save);
		$('.SearchFieldsEdit .updateLabels').click(Settings_Index_Js.updateLabels);
		$('.SearchFieldsEdit .turn_off').click(Settings_Index_Js.replacement);
		$('.SearchFieldsEdit .globalsearchall').click(Settings_Index_Js.searchallfields);
	},
	replacement: function (e) {
		var thisInstance = this;
		var target = $(e.currentTarget);

		if (parseInt(target.val())) {
			target.val(0).html(app.vtranslate('JS_TURN_ON'));
			target.removeClass("btn-success").addClass("btn-danger");
		} else {
			target.val(1).html(app.vtranslate('JS_TURN_OFF'));
			target.removeClass("btn-danger").addClass("btn-success");
		}
		Settings_Index_Js.save(e);
	},
	updateLabels: function (e) {
		var target = $(e.currentTarget);
		var closestTrElement = target.closest('tr');
		var progress = $.progressIndicator({
			'message': app.vtranslate('Update labels'),
			'blockInfo': {
				'enabled': true
			}
		});

		Settings_Index_Js.registerSaveEvent('UpdateLabels', {
			'tabid': closestTrElement.data('tabid'),
		});
		progress.progressIndicator({'mode': 'hide'});
	},
	save: function (e) {
		var target = $(e.currentTarget);
		var name = target.attr("name");
		var value = target.val();
		var closestTrElement = target.closest('tr');
		var progress = $.progressIndicator({
			'message': app.vtranslate('Saving changes'),
			'blockInfo': {
				'enabled': true
			}
		});
		Settings_Index_Js.registerSaveEvent('Save', {
			'name': name,
			'value': value,
			'tabid': closestTrElement.data('tabid'),
		});
		progress.progressIndicator({'mode': 'hide'});
	},
	searchallfields: function (e) {
		var target = $(e.currentTarget);
		var name = target.attr("name");
		var value = target.val();
		var closestTrElement = target.closest('tr');
		var tabid = closestTrElement.data('tabid')
                //Salesplatform.ru begin Vtiger 7 global search support
//		var params = {
//			text: app.vtranslate('JS_SAVE_GLOBAL_SETTINGS'),
//			animation: 'show',
//			type: 'success'
//		};
//		Vtiger_Helper_Js.showPnotify(params);
                //Salesplatform.ru end Vtiger 7 global search support
		if ($(this).prop('checked')) {
 		  //$(this).prop('checked', false);
		  var value = 1;
        }
        else {
		  //$(this).prop('checked', true);
		  var value = 0;
        }
		Settings_Index_Js.registerSaveEvent('Save', {
			'name': name,
			'value': value,
			'tabid': tabid,
		});

	},
	registerSaveEvent: function (mode, data) {
		var resp = '';
		var params = {}
                // Salesplatform.ru begin Vtiger 7 support
		params['module'] = app.getModuleName(),
                params['parent'] = app.getParentModuleName(),
                params['action'] = 'SaveAjax',
                params['mode'] = mode,
                params['params'] = data
//        	params.data = {
//			module: app.getModuleName(),
//			parent: app.getParentModuleName(),
//			action: 'SaveAjax',
//			mode: mode,
//			params: data
//		}
                // Salesplatform.ru end Vtiger 7 support
		params.async = false;
		params.dataType = 'json';
		AppConnector.request(params).then(
				function (data) {
					var response = data['result'];
					var params = {
                                            // Salesplatform.ru begin Vtiger 7 support
                                                title: app.vtranslate('JS_UPDATED'),
                                            // Salesplatform.ru end Vtiger 7 support     
						text: response['message'],
						animation: 'show',
						type: 'success'
					};
					Vtiger_Helper_Js.showPnotify(params);
					resp = response['success'];
				},
				function (data, err) {

				}
		);
	},
	/**
	 * Function to register the event to make the modules sortable
	 */
	makeFieldsListSortable: function () {
		var thisInstance = this;
		var contents = jQuery('.SearchFieldsEdit').find('.contents');
		var table = contents.find('table');

		table.each(function () {
			jQuery(this).find('tbody').sortable({
				'containment': '#modulesEntity',
				'revert': true,
				'tolerance': 'pointer',
				'cursor': 'move',
				'helper': function (e, ui) {
					//while dragging helper elements td element will take width as contents width
					//so we are explicitly saying that it has to be same width so that element will not
					//look like disturbed
					ui.children().each(function (index, element) {
						element = jQuery(element);
						element.width(element.width());
					})
					return ui;
				},
				'update': function (e, ui) {
					thisInstance.showSaveModuleSequenceButton();
				}
			});
		});
	},
	/**
	 * Function to show the save button of moduleSequence
	 */
	showSaveModuleSequenceButton: function () {
		var thisInstance = this;
		var layout = jQuery('.SearchFieldsEdit');
		var saveButton = layout.find('.saveModuleSequence');
		thisInstance.updatedBlockFieldsList = [];
		saveButton.removeClass('hide');
	},
	/**
	 * Function which will hide the saveModuleSequence button
	 */
	hideSaveModuleSequenceButton: function () {
		var layout = jQuery('.SearchFieldsEdit');
		var saveButton = layout.find('.saveModuleSequence');
		saveButton.addClass('hide');
	},
	/**
	 * Function will save the field sequences
	 */
	updateModulesSequence: function () {
		var thisInstance = this;
		var progressIndicatorElement = jQuery.progressIndicator({
			'position': 'html',
			'blockInfo': {
				'enabled': true
			}
		});
		var params = {};
		params['module'] = app.getModuleName();
		params['parent'] = app.getParentModuleName();
		params['action'] = 'SaveAjax';
		params['mode'] = 'SaveSequenceNumber';
		params['updatedFields'] = thisInstance.updatedBlockFieldsList;



		AppConnector.request(params).then(
				function (data) {
					progressIndicatorElement.progressIndicator({'mode': 'hide'});
					var params = {};
					params['text'] = app.vtranslate('JS_MODULES_SEQUENCE_UPDATED');
					Settings_Vtiger_Index_Js.showMessage(params);
				},
				function (error) {
					progressIndicatorElement.progressIndicator({'mode': 'hide'});
				}
		);
	},
	/**
	 * Function to create the list of updated modules and their sequences
	 */
	createUpdatedSequenceModulesList: function () {
		var thisInstance = this;
		var contents = jQuery('.SearchFieldsEdit').find('.contents');

		var updatedModules = contents.find('tbody');
		var editModules = updatedModules.find('tr');
		var expectedModuleSequence = 1;
		editModules.each(function (i, domElement) {
			var moduleEle = jQuery(domElement);
			var moduleId = moduleEle.data('tabid');
			thisInstance.updatedBlockFieldsList.push({'tabid': moduleId, 'sequence': expectedModuleSequence});
			expectedModuleSequence = expectedModuleSequence + 1;
		});
	},
	/**
	 * Function to register click event for save button of modules sequence
	 */
	registerModuleSequenceSaveClick: function () {
		var thisInstance = this;
		var layout = jQuery('.SearchFieldsEdit');
		layout.on('click', '.saveModuleSequence', function () {
			thisInstance.hideSaveModuleSequenceButton();
			thisInstance.createUpdatedSequenceModulesList();
			thisInstance.updateModulesSequence();
		});
	},
	registerEvents: function () {
		Settings_Index_Js.initEvents();
		this.makeFieldsListSortable();
		this.registerModuleSequenceSaveClick();
	}
}
$(document).ready(function () {
	Settings_Index_Js.registerEvents();
})
