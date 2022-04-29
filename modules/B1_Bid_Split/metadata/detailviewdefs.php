<?php
$module_name = 'B1_Bid_Split';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'syncDetailEditViews' => true,
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'b1_bid_split_opportunities_name',
            'label' => 'LBL_B1_BID_SPLIT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
