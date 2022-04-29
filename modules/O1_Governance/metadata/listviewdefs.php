<?php
$module_name = 'O1_Governance';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'O1_Governance_O1_TASK_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_O1_Governance_O1_TASK_FROM_O1_TASK_TITLE',
    'id' => 'O1_Governance_O1_TASKO1_TASK_IDA',
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
  'WO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WO',
    'width' => '10%',
    'default' => true,
  ),
  'WO_RESP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WO_RESP',
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
  'WO_RESP_TYPE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WO_RESP_TYPE_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'WO_RESP_TYPE_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WO_RESP_TYPE_CODE',
    'width' => '10%',
    'default' => false,
  ),
  'WO_EMP_CODE_RESP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WO_EMP_CODE_RESP',
    'width' => '10%',
    'default' => false,
  ),
  'WO_EMP_CODE_RESP_EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WO_EMP_CODE_RESP_EMAIL',
    'width' => '10%',
    'default' => false,
  ),
  'WO_EMP_NAME_RESP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WO_EMP_NAME_RESP',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
