<?php
$module_name = 'BU_BU';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'BU_BU_FUN_SUBSUBFUNCTION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BU_BU_FUN_SUBSUBFUNCTION_FROM_FUN_SUBSUBFUNCTION_TITLE',
    'id' => 'BU_BU_FUN_SUBSUBFUNCTIONFUN_SUBSUBFUNCTION_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'BU_BU_REG_SUB_LOCATION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BU_BU_REG_SUB_LOCATION_FROM_REG_SUB_LOCATION_TITLE',
    'id' => 'BU_BU_REG_SUB_LOCATIONREG_SUB_LOCATION_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ORGANIZATIONID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORGANIZATIONID',
    'width' => '10%',
    'default' => true,
  ),
  'DIVISIONNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DIVISIONNAME',
    'width' => '10%',
    'default' => true,
  ),
  'REGIONNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REGIONNAME',
    'width' => '10%',
    'default' => true,
  ),
  'REGIONGRPNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REGIONGRPNAME',
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
  'SUBSUBFUNCTIONNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUBSUBFUNCTIONNAME',
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
  'LOCATIONNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOCATIONNAME',
    'width' => '10%',
    'default' => true,
  ),
  'SUBLOCATIONNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUBLOCATIONNAME',
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
