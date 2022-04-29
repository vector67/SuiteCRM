<?php
$module_name = 'F1_SNB_Forecast';
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'snb_opp_wo',
            'label' => 'LBL_SNB_OPP_WO',
          ),
          1 => 
          array (
            'name' => 'snb_wo_opp_amount',
            'label' => 'LBL_SNB_WO_OPP_AMOUNT',
          ),
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'snb_202001',
            'label' => 'LBL_SNB_202001',
          ),
          1 => 
          array (
            'name' => 'snb_202007',
            'label' => 'LBL_SNB_202007',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'snb_202002',
            'label' => 'LBL_SNB_202002',
          ),
          1 => 
          array (
            'name' => 'snb_202008',
            'label' => 'LBL_SNB_202008',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'snb_202003',
            'label' => 'LBL_SNB_202003',
          ),
          1 => 
          array (
            'name' => 'snb_202009',
            'label' => 'LBL_SNB_202009',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'snb_202004',
            'label' => 'LBL_SNB_202004',
          ),
          1 => 
          array (
            'name' => 'snb_202010',
            'label' => 'LBL_SNB_202010',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'snb_202005',
            'label' => 'LBL_SNB_202005',
          ),
          1 => 
          array (
            'name' => 'snb_202011',
            'label' => 'LBL_SNB_202011',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'snb_202006',
            'label' => 'LBL_SNB_202006',
          ),
          1 => 
          array (
            'name' => 'snb_202012',
            'label' => 'LBL_SNB_202012',
          ),
        ),
      ),
    ),
  ),
);
;
?>
