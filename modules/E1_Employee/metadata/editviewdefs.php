<?php
$module_name = 'E1_Employee';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          0 => 'document_name',
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
          0 => 'assigned_user_name',
          1 => 'status_id',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
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
              'onchangeSetFileNameTo' => 'document_name',
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
