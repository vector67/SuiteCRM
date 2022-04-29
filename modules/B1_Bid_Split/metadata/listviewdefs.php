<?php
$module_name = 'B1_Bid_Split';
$listViewDefs [$module_name] = 
array (
  'BID_SPLIT_FUNCTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BID_SPLIT_FUNCTION',
    'width' => '10%',
    'default' => true,
  ),
  'BID_SPLIT_WORKING_ORG' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_BID_SPLIT_WORKING_ORG',
    'width' => '10%',
    'default' => true,
  ),
  'BID_SPLIT_PERC' => 
  array (
    'type' => 'int',
    'label' => 'LBL_BID_SPLIT_PERC',
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
