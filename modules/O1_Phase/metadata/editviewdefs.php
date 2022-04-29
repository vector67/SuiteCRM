<?php
$module_name = 'O1_Phase';
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
          0 => 'description',
          1 => 
          array (
            'name' => 'phase_code',
            'label' => 'LBL_PHASE_CODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'o1_phase_project_name',
            'label' => 'LBL_O1_PHASE_PROJECT_FROM_PROJECT_TITLE',
          ),
          1 => 
          array (
            'name' => 'global_funct_text2',
            'label' => 'LBL_GLOBAL_FUNCT_TEXT2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'bst_status',
            'label' => 'LBL_BST_STATUS',
          ),
          1 => 
          array (
            'name' => 'phase_text1',
            'label' => 'LBL_PHASE_TEXT1',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phase_int1',
            'label' => 'LBL_PHASE_INT1',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phase_budget',
            'label' => 'LBL_PHASE_BUDGET',
          ),
          1 => 
          array (
            'name' => 'phase_lab_cost',
            'label' => 'LBL_PHASE_LAB_COST',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phase_lab_rev',
            'label' => 'LBL_PHASE_LAB_REV',
          ),
          1 => 
          array (
            'name' => 'phase_lab_forecast',
            'label' => 'LBL_PHASE_LAB_FORECAST',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'phase_lab_wih',
            'label' => 'LBL_PHASE_LAB_WIH',
          ),
        ),
      ),
    ),
  ),
);
;
?>
