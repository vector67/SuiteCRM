<?php
$dashletData['B1_Bid_SplitDashlet']['searchFields'] = array (
  'bid_split_function' => 
  array (
    'default' => '',
  ),
  'bid_split_working_org' => 
  array (
    'default' => '',
  ),
  'bid_split_perc' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['B1_Bid_SplitDashlet']['columns'] = array (
  'bid_split_function' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BID_SPLIT_FUNCTION',
    'width' => '10%',
    'default' => true,
  ),
  'bid_split_working_org' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_BID_SPLIT_WORKING_ORG',
    'width' => '10%',
    'default' => true,
  ),
  'bid_split_perc' => 
  array (
    'type' => 'int',
    'label' => 'LBL_BID_SPLIT_PERC',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
