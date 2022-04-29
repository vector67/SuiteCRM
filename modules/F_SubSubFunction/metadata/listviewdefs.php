<?php
$module_name = 'F_SubSubFunction';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'F_SUBSUBFUNCTION_F_SUBFUNCTION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_F_SUBSUBFUNCTION_F_SUBFUNCTION_FROM_F_SUBFUNCTION_TITLE',
    'id' => 'F_SUBSUBFUNCTION_F_SUBFUNCTIONF_SUBFUNCTION_IDA',
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
  'FUNCTIONNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FUNCTIONNAME',
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
  'SUBFUNCTIONNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUBFUNCTIONNAME',
    'width' => '10%',
    'default' => true,
  ),
  'SUBSUBFUNCTIONCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUBSUBFUNCTIONCODE',
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
