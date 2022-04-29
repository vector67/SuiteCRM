<?php
$module_name = 'B1_Bid_Split';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bid_split_function',
            'studio' => 'visible',
            'label' => 'LBL_BID_SPLIT_FUNCTION',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bid_split_working_org',
            'studio' => 'visible',
            'label' => 'LBL_BID_SPLIT_WORKING_ORG',
          ),
          1 => 
          array (
            'name' => 'bid_split_perc',
            'label' => 'LBL_BID_SPLIT_PERC',
          ),
        ),
      ),
    ),
  ),
);
;
?>
