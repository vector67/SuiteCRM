<?php
$module_name='F_SubSubFunction';
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
      'popup_module' => 'F_SubSubFunction',
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
    'subsubfunctioncode' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_SUBSUBFUNCTIONCODE',
      'width' => '10%',
      'default' => true,
    ),
    'subfunctioncode' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_SUBFUNCTIONCODE',
      'width' => '10%',
      'default' => true,
    ),
    'subfunctionname' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_SUBFUNCTIONNAME',
      'width' => '10%',
      'default' => true,
    ),
    'functioncode' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_FUNCTIONCODE',
      'width' => '10%',
      'default' => true,
    ),
    'functionname' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_FUNCTIONNAME',
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
    'description' => 
    array (
      'type' => 'text',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '45%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'F_SubSubFunction',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'F_SubSubFunction',
      'width' => '5%',
      'default' => true,
    ),
  ),
);