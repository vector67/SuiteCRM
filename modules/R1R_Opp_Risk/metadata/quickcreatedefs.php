<?php
$module_name = 'R1R_Opp_Risk';
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
        'LBL_QUICKCREATE_PANEL1' => 
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
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'risk_opp_comp',
            'studio' => 'visible',
            'label' => 'LBL_RISK_OPP_COMP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'risk_opp_prep',
            'studio' => 'visible',
            'label' => 'LBL_RISK_OPP_PREP',
          ),
        ),
      ),
    ),
  ),
);
;
?>
