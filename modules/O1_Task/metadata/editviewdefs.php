<?php
$module_name = 'O1_Task';
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
            'name' => 'o1_task_o1_phase_name',
            'label' => 'LBL_O1_TASK_O1_PHASE_FROM_O1_PHASE_TITLE',
          ),
          1 => 
          array (
            'name' => 'task_code',
            'label' => 'LBL_TASK_CODE',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'task_int1',
            'label' => 'LBL_TASK_INT1',
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
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'task_int2',
            'label' => 'LBL_TASK_INT2',
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
            'name' => 'task_lab_budget',
            'label' => 'LBL_TASK_LAB_BUDGET',
          ),
          1 => 
          array (
            'name' => 'task_lab_cost',
            'label' => 'LBL_TASK_LAB_COST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'task_lab_forecast',
            'label' => 'LBL_TASK_LAB_FORECAST',
          ),
          1 => 
          array (
            'name' => 'task_lab_rev',
            'label' => 'LBL_TASK_LAB_REV',
          ),
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
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'task_lab_wih',
            'label' => 'LBL_TASK_LAB_WIH',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
