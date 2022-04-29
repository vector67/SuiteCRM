<?php
$popupMeta = array (
    'moduleMain' => 'Cl_Totals',
    'varName' => 'Cl_Totals',
    'orderBy' => 'cl_totals.name',
    'whereClauses' => array (
  'name' => 'cl_totals.name',
),
    'searchInputs' => array (
  0 => 'cl_totals_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
