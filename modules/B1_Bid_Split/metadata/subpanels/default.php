<?php
$module_name='B1_Bid_Split';
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
      'popup_module' => 'B1_Bid_Split',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'bid_split_function' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_BID_SPLIT_FUNCTION',
      'width' => '10%',
      'default' => true,
    ),
    'bid_split_working_org' => 
    array (
      'type' => 'dynamicenum',
      'studio' => 'visible',
      'vname' => 'LBL_BID_SPLIT_WORKING_ORG',
      'width' => '10%',
      'default' => true,
    ),
    'bid_split_perc' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_BID_SPLIT_PERC',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'B1_Bid_Split',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'B1_Bid_Split',
      'width' => '5%',
      'default' => true,
    ),
  ),
);