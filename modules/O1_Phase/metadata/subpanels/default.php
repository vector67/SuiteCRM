<?php
$module_name='O1_Phase';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'O1_Phase',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'phase_code' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PHASE_CODE',
      'width' => '10%',
      'default' => true,
    ),
    'assigned_user_name' => 
    array (
      'link' => true,
      'type' => 'relate',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'id' => 'ASSIGNED_USER_ID',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'assigned_user_id',
    ),
    'phase_budget' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_PHASE_BUDGET',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'phase_lab_cost' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_PHASE_LAB_COST',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'phase_lab_rev' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_PHASE_LAB_REV',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'phase_lab_forecast' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_PHASE_LAB_FORECAST',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'O1_Phase',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'O1_Phase',
      'width' => '5%',
      'default' => true,
    ),
  ),
);