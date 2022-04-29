<?php
$module_name = 'po_PO_Travel_Trans';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TRAVEL_TRANS_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TRAVEL_TRANS_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PO_TRAVEL_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PO_TRAVEL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'PO_PO_TRAVEL_PO_PO_TRAVEL_TRANS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PO_PO_TRAVEL_PO_PO_TRAVEL_TRANS_FROM_PO_PO_TRAVEL_TITLE',
    'id' => 'PO_PO_TRAVEL_PO_PO_TRAVEL_TRANSPO_PO_TRAVEL_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PO_PO_TRAVEL_TRANS_O1_GL_CODES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PO_PO_TRAVEL_TRANS_O1_GL_CODES_FROM_O1_GL_CODES_TITLE',
    'id' => 'PO_PO_TRAVEL_TRANS_O1_GL_CODESO1_GL_CODES_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
