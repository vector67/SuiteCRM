<?php
$module_name = 'F1_SNB_Forecast';
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
        'LBL_EDITVIEW_PANEL2' => 
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'snb_opp_wo',
            'label' => 'LBL_SNB_OPP_WO',
          ),
          1 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'snb_wo_percent',
            'label' => 'LBL_SNB_WO_PERCENT ',
          ),
          1 => 
          array (
            'name' => 'snb_wo_opp_amount',
            'label' => 'LBL_SNB_WO_OPP_AMOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'snb_start_date',
            'label' => 'LBL_SNB_START_DATE',
          ),
          1 => 
          array (
            'name' => 'snb_opp_duration',
            'label' => 'LBL_SNB_OPP_DURATION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
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
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'snb_202101',
            'label' => 'LBL_SNB_202101',
          ),
          1 => 
          array (
            'name' => 'snb_202107',
            'label' => 'LBL_SNB_202107',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'snb_202102',
            'label' => 'LBL_SNB_202102',
          ),
          1 => 
          array (
            'name' => 'snb_202108',
            'label' => 'LBL_SNB_202108',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'snb_202103',
            'label' => 'LBL_SNB_202103',
          ),
          1 => 
          array (
            'name' => 'snb_202109',
            'label' => 'LBL_SNB_202109',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'snb_202104',
            'label' => 'LBL_SNB_202104',
          ),
          1 => 
          array (
            'name' => 'snb_202110',
            'label' => 'LBL_SNB_202110',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'snb_202105',
            'label' => 'LBL_SNB_202105',
          ),
          1 => 
          array (
            'name' => 'snb_202111',
            'label' => 'LBL_SNB_202111',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'snb_202106',
            'label' => 'LBL_SNB_202106',
          ),
          1 => 
          array (
            'name' => 'snb_202112',
            'label' => 'LBL_SNB_202112',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'snb_remainder',
            'label' => 'LBL_SNB_REMAINDER',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
