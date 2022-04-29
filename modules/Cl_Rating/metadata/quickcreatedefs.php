<?php
$module_name = 'Cl_Rating';
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'calcs_fee_rev_total',
            'label' => 'LBL_CALCS_FEE_REV_TOTAL',
          ),
          1 => 
          array (
            'name' => 'calcs_forecast_total',
            'label' => 'LBL_CALCS_FORECAST_TOTAL',
          ),
        ),
      ),
    ),
  ),
);
;
?>
