<?php
$module_name = 'O1_WO';
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
            'name' => 'wo_int1',
            'label' => 'LBL_WO_INT1',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'wo_code',
            'label' => 'LBL_WO_CODE',
          ),
          1 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'bst_status',
            'label' => 'LBL_BST_STATUS',
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
            'name' => 'wo_lab_budget',
            'label' => 'LBL_WO_LAB_BUDGET',
          ),
          1 => 
          array (
            'name' => 'wo_lab_cost',
            'label' => 'LBL_WO_LAB_COST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'wo_lab_wih',
            'label' => 'LBL_WO_LAB_WIH',
          ),
          1 => 
          array (
            'name' => 'wo_lab_rev',
            'label' => 'LBL_WO_LAB_REV',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'wo_lab_forecast',
            'label' => 'LBL_WO_LAB_FORECAST',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
