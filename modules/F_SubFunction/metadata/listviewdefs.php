<?php
$module_name = 'F_SubFunction';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'F_SUBFUNCTION_F_FUNCTION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_F_SUBFUNCTION_F_FUNCTION_FROM_F_FUNCTION_TITLE',
    'id' => 'F_SUBFUNCTION_F_FUNCTIONF_FUNCTION_IDA',
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
  'FUNCTIONCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FUNCTIONCODE',
    'width' => '10%',
    'default' => true,
  ),
  'SUBFUNCTIONCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUBFUNCTIONCODE',
    'width' => '10%',
    'default' => true,
  ),
  'FUNCTIONNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FUNCTIONNAME',
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
);
;
?>
