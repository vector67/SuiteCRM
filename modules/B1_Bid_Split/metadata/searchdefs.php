<?php
$module_name = 'B1_Bid_Split';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'bid_split_function' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_BID_SPLIT_FUNCTION',
        'width' => '10%',
        'default' => true,
        'name' => 'bid_split_function',
      ),
      'bid_split_working_org' => 
      array (
        'type' => 'dynamicenum',
        'studio' => 'visible',
        'label' => 'LBL_BID_SPLIT_WORKING_ORG',
        'width' => '10%',
        'default' => true,
        'name' => 'bid_split_working_org',
      ),
    ),
    'advanced_search' => 
    array (
      'bid_split_working_org' => 
      array (
        'type' => 'dynamicenum',
        'studio' => 'visible',
        'label' => 'LBL_BID_SPLIT_WORKING_ORG',
        'width' => '10%',
        'default' => true,
        'name' => 'bid_split_working_org',
      ),
      'bid_split_function' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_BID_SPLIT_FUNCTION',
        'width' => '10%',
        'default' => true,
        'name' => 'bid_split_function',
      ),
      'bid_split_perc' => 
      array (
        'type' => 'int',
        'label' => 'LBL_BID_SPLIT_PERC',
        'width' => '10%',
        'default' => true,
        'name' => 'bid_split_perc',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
