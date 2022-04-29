<?php
$module_name = 'O1_Phase';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PHASE_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PHASE_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'O1_PHASE_PROJECT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_O1_PHASE_PROJECT_FROM_PROJECT_TITLE',
    'id' => 'O1_PHASE_PROJECTPROJECT_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'GLOBAL_FUNCT_TEXT2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GLOBAL_FUNCT_TEXT2',
    'width' => '10%',
    'default' => true,
  ),
  'PHASE_BUDGET' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PHASE_BUDGET',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PHASE_LAB_COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PHASE_LAB_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PHASE_LAB_REV' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PHASE_LAB_REV',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PHASE_LAB_FORECAST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PHASE_LAB_FORECAST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PHASE_LAB_WIH' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PHASE_LAB_WIH',
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
  'PHASE_TEXT1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PHASE_TEXT1',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'PHASE_INT1' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHASE_INT1',
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
