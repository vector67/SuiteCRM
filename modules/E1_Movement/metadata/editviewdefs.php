<?php
$module_name = 'E1_Movement';
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
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        1 => 
        array (
          0 => 'assigned_user_name',
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
