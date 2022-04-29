<?php
$module_name = 'E1_Employee';
$_object_name = 'e1_employee';
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
          0 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'emp_username',
            'label' => 'LBL_EMP_USERNAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'emp_code',
            'label' => 'LBL_EMP_CODE',
          ),
          1 => 
          array (
            'name' => 'emp_name',
            'label' => 'LBL_EMP_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'emp_current_function',
            'label' => 'LBL_EMP_CURRENT_FUNCTION',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'emp_office',
            'label' => 'LBL_EMP_OFFICE',
          ),
          1 => 
          array (
            'name' => 'emp_region',
            'label' => 'LBL_EMP_REGION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'emp_wo',
            'label' => 'LBL_EMP_WO',
          ),
          1 => 
          array (
            'name' => 'emp_location',
            'label' => 'LBL_EMP_LOCATION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'emp_move_create',
            'label' => 'LBL_EMP_MOVE_CREATE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
