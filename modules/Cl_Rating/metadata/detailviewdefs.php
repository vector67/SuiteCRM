<?php
$module_name = 'Cl_Rating';
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
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'sj_division',
            'studio' => 'visible',
            'label' => 'LBL_SJ_DIVISION',
          ),
        ),
        1 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rating_strat_val_fact2',
            'label' => 'LBL_RATING_STRAT_VAL_FACT2',
          ),
          1 => 
          array (
            'name' => 'rating_strat_val_fact',
            'label' => 'LBL_RATING_STRAT_VAL_FACT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rating_overall_weight_fact',
            'label' => 'LBL_RATING_OVERALL_WEIGHT_FACT',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rating_lab_rev_norm',
            'label' => 'LBL_RATING_LAB_REV_NORM',
          ),
          1 => 
          array (
            'name' => 'rating_lab_rev_fact',
            'label' => 'LBL_RATING_LAB_REV_FACT',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rating_np_norm',
            'label' => 'LBL_RATING_NP_NORM',
          ),
          1 => 
          array (
            'name' => 'rating_np_fact',
            'label' => 'LBL_RATING_NP_FACT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rating_np_min',
            'label' => 'LBL_RATING_NP_MIN',
          ),
          1 => 
          array (
            'name' => 'rating_np_max',
            'label' => 'LBL_RATING_NP_MAX',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rating_gp_fact',
            'label' => 'LBL_RATING_GP_FACT',
          ),
          1 => 
          array (
            'name' => 'rating_gp_norm',
            'label' => 'LBL_RATING_GP_NORM',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rating_fcast_norm',
            'label' => 'LBL_RATING_FCAST_NORM',
          ),
          1 => 
          array (
            'name' => 'rating_lab_forecast_fact',
            'label' => 'LBL_RATING_LAB_FORECAST_FACT',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rating_ar_days_norm',
            'label' => 'LBL_RATING_AR_DAYS_NORM',
          ),
          1 => 
          array (
            'name' => 'acc_ardays_min',
            'label' => 'LBL_ACC_ARDAYS_MIN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rating_ar_days_fact',
            'label' => 'LBL_RATING_AR_DAYS_FACT',
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
            'name' => 'rating_a_client_bot',
            'label' => 'LBL_RATING_A_CLIENT_BOT',
          ),
          1 => 
          array (
            'name' => 'rating_b_client_bot',
            'label' => 'LBL_RATING_B_CLIENT_BOT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rating_c_client_bot',
            'label' => 'LBL_RATING_C_CLIENT_BOT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
