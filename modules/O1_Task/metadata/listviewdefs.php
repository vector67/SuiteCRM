<?php
$module_name = 'O1_Task';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'O1_PHASE_O1_TASK_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_O1_PHASE_O1_TASK_FROM_O1_PHASE_TITLE',
    'id' => 'O1_PHASE_O1_TASKO1_PHASE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TASK_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TASK_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'O1_TASK_O1_PHASE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_O1_TASK_O1_PHASE_FROM_O1_PHASE_TITLE',
    'id' => 'O1_TASK_O1_PHASEO1_PHASE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TASK_LAB_BUDGET' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TASK_LAB_BUDGET',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TASK_LAB_COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TASK_LAB_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TASK_LAB_REV' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TASK_LAB_REV',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TASK_LAB_WIH' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TASK_LAB_WIH',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TASK_LAB_FORECAST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TASK_LAB_FORECAST',
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
  'TASK_INT2' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TASK_INT2',
    'width' => '10%',
    'default' => false,
  ),
  'TASK_INT1' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TASK_INT1',
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
