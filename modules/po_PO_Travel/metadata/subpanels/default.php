<?php
$module_name='po_PO_Travel';
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
      'popup_module' => 'po_PO_Travel',
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
    'po_gest_traveller' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PO_GEST_TRAVELLER',
      'width' => '10%',
      'default' => true,
    ),
    'po_po_number' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PO_PO_NUMBER',
      'width' => '10%',
      'default' => true,
    ),
    'po_departure_date' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_PO_DEPARTURE_DATE',
      'width' => '10%',
      'default' => true,
    ),
    'po_arrival_date' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_PO_ARRIVAL_DATE',
      'width' => '10%',
      'default' => true,
    ),
    'po_total' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_PO_TOTAL',
      'currency_format' => true,
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
      'module' => 'po_PO_Travel',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'po_PO_Travel',
      'width' => '5%',
      'default' => true,
    ),
  ),
);