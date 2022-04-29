<?php
$module_name = 'O1_Governance';
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
          0 => '',
          1 => 
          array (
            'name' => 'wo_resp_type_code',
            'label' => 'LBL_WO_RESP_TYPE_CODE',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'wo',
            'label' => 'LBL_WO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'wo_emp_code_resp',
            'label' => 'LBL_WO_EMP_CODE_RESP',
          ),
          1 => 
          array (
            'name' => 'wo_emp_code_resp_email',
            'label' => 'LBL_WO_EMP_CODE_RESP_EMAIL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'wo_emp_name_resp',
            'label' => 'LBL_WO_EMP_NAME_RESP',
          ),
          1 => 
          array (
            'name' => 'wo_resp',
            'label' => 'LBL_WO_RESP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'wo_resp_type_name',
            'label' => 'LBL_WO_RESP_TYPE_NAME',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
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
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'wo_lab_budget',
            'label' => 'LBL_WO_LAB_BUDGET',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'wo_lab_cost',
            'label' => 'LBL_WO_LAB_COST',
          ),
          1 => 
          array (
            'name' => 'wo_lab_forecast',
            'label' => 'LBL_WO_LAB_FORECAST',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'wo_lab_rev',
            'label' => 'LBL_WO_LAB_REV',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
