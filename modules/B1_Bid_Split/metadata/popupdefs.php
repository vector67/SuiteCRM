<?php
$popupMeta = array (
    'moduleMain' => 'B1_Bid_Split',
    'varName' => 'B1_Bid_Split',
    'orderBy' => 'b1_bid_split.name',
    'whereClauses' => array (
  'bid_split_function' => 'b1_bid_split.bid_split_function',
  'bid_split_working_org' => 'b1_bid_split.bid_split_working_org',
  'bid_split_perc' => 'b1_bid_split.bid_split_perc',
),
    'searchInputs' => array (
  4 => 'bid_split_function',
  5 => 'bid_split_working_org',
  6 => 'bid_split_perc',
),
    'searchdefs' => array (
  'bid_split_function' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BID_SPLIT_FUNCTION',
    'width' => '10%',
    'name' => 'bid_split_function',
  ),
  'bid_split_working_org' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_BID_SPLIT_WORKING_ORG',
    'width' => '10%',
    'name' => 'bid_split_working_org',
  ),
  'bid_split_perc' => 
  array (
    'type' => 'int',
    'label' => 'LBL_BID_SPLIT_PERC',
    'width' => '10%',
    'name' => 'bid_split_perc',
  ),
),
    'listviewdefs' => array (
  'BID_SPLIT_FUNCTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BID_SPLIT_FUNCTION',
    'width' => '10%',
    'default' => true,
    'name' => 'bid_split_function',
  ),
  'BID_SPLIT_WORKING_ORG' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_BID_SPLIT_WORKING_ORG',
    'width' => '10%',
    'default' => true,
    'name' => 'bid_split_working_org',
  ),
  'BID_SPLIT_PERC' => 
  array (
    'type' => 'int',
    'label' => 'LBL_BID_SPLIT_PERC',
    'width' => '10%',
    'default' => true,
    'name' => 'bid_split_perc',
  ),
),
);
