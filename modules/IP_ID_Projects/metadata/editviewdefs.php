<?php
$module_name = 'IP_ID_Projects';
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
          0 => 'active_date',
          1 => 
          array (
            'name' => 'id_project_location',
            'label' => 'LBL_ID_PROJECT_LOCATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => 
          array (
            'name' => 'id_project_type',
            'studio' => 'visible',
            'label' => 'LBL_ID_PROJECT_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'id_projects_dep',
            'label' => 'LBL_ID_PROJECTS_DEP',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'id_project_no',
            'label' => 'LBL_ID_PROJECT_NO',
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
            'name' => 'id_project_budget_ya',
            'label' => 'LBL_ID_PROJECT_BUDGET_YA',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'id_project_budget_yb',
            'label' => 'LBL_ID_PROJECT_BUDGET_YB',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'id_project_budget_yc',
            'label' => 'LBL_ID_PROJECT_BUDGET_YC',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
