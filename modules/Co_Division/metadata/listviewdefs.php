<?php
$module_name = 'Co_Division';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'DIVISIONCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DIVISIONCODE',
    'width' => '10%',
    'default' => true,
  ),
  'CO_COMPANY_CO_DIVISION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CO_COMPANY_CO_DIVISION_FROM_CO_COMPANY_TITLE',
    'id' => 'CO_COMPANY_CO_DIVISIONCO_COMPANY_IDA',
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
