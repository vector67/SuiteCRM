<?php
$module_name = 'O1_WO';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'WO_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WO_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'WO_LAB_BUDGET' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_WO_LAB_BUDGET',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'WO_LAB_COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_WO_LAB_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'WO_LAB_REV' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_WO_LAB_REV',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'WO_LAB_WIH' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_WO_LAB_WIH',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'WO_LAB_FORECAST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_WO_LAB_FORECAST',
    'currency_format' => true,
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
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'WO_INT1' => 
  array (
    'type' => 'int',
    'label' => 'LBL_WO_INT1',
    'width' => '10%',
    'default' => false,
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
