<?php
$module_name = 'BS_BlueSky';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
        'LBL_EDITVIEW_PANEL1' => 
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bluesky_status',
            'studio' => 'visible',
            'label' => 'LBL_BLUESKY_STATUS',
          ),
          1 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'bluesky_capex',
            'label' => 'LBL_BLUESKY_CAPEX',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'bluesky_timeframe',
            'studio' => 'visible',
            'label' => 'LBL_BLUESKY_TIMEFRAME',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bluesky_fee',
            'label' => 'LBL_BLUESKY_FEE',
          ),
          1 => 
          array (
            'name' => 'bluesky_finance_ref',
            'label' => 'LBL_BLUESKY_FINANCE_REF',
          ),
        ),
      ),
    ),
  ),
);
;
?>
