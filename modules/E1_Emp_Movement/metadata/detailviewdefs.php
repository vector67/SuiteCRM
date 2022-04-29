<?php
$module_name = 'E1_Emp_Movement';
$_object_name = 'e1_emp_movement';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
          0 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        2 => 
        array (
          0 => 'active_date',
          1 => 'exp_date',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'emp_move_prop_function',
            'studio' => 'visible',
            'label' => 'LBL_EMP_MOVE_PROP_FUNCTION',
          ),
          1 => 
          array (
            'name' => 'emp_move_prop_wo',
            'studio' => 'visible',
            'label' => 'LBL_EMP_MOVE_PROP_WO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'emp_move_prop_location',
            'studio' => 'visible',
            'label' => 'LBL_EMP_MOVE_PROP_LOCATION',
          ),
          1 => 
          array (
            'name' => 'emp_move_approve',
            'label' => 'LBL_EMP_MOVE_APPROVE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
