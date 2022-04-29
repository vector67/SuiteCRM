<?php
$module_name='po_PO_Travel_Trans';
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
      'popup_module' => 'po_PO_Travel_Trans',
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
    'po_travel_type' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_PO_TRAVEL_TYPE',
      'width' => '10%',
      'default' => true,
    ),
    'travel_trans_amount' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_TRAVEL_TRANS_AMOUNT',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
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
      'module' => 'po_PO_Travel_Trans',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'po_PO_Travel_Trans',
      'width' => '5%',
      'default' => true,
    ),
  ),
);