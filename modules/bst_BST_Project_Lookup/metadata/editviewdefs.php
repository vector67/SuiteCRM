<?php
$module_name = 'bst_BST_Project_Lookup';
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
            'name' => 'bst_project_code',
            'label' => 'LBL_BST_PROJECT_CODE',
          ),
          1 => 
          array (
            'name' => 'bst_phase_code',
            'label' => 'LBL_BST_PHASE_CODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'bst_task_code',
            'label' => 'LBL_BST_TASK_CODE',
          ),
          1 => 
          array (
            'name' => 'bst_wo',
            'label' => 'LBL_BST_WO',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
