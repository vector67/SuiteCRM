<?php
$module_name = 'po_PO_Travel';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PO_PO_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PO_PO_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'PO_PO_TRAVEL_BST_BST_PROJECT_LOOKUP_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PO_PO_TRAVEL_BST_BST_PROJECT_LOOKUP_FROM_BST_BST_PROJECT_LOOKUP_TITLE',
    'id' => 'PO_PO_TRAVEL_BST_BST_PROJECT_LOOKUPBST_BST_PROJECT_LOOKUP_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'PO_GEST_TRAVELLER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PO_GEST_TRAVELLER',
    'width' => '10%',
    'default' => true,
  ),
  'PO_DEPARTURE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PO_DEPARTURE_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'PO_ARRIVAL_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PO_ARRIVAL_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'PO_SUBTOTAL' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PO_SUBTOTAL',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PO_VAT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PO_VAT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PO_TOTAL' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PO_TOTAL',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
