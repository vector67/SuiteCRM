<?php
$module_name = 'PS_Proj_survey';
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
          0 => 'description',
          1 => 
          array (
            'name' => 'survey_type',
            'studio' => 'visible',
            'label' => 'LBL_SURVEY_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'comments',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTS',
          ),
          1 => 
          array (
            'name' => 'discipline',
            'studio' => 'visible',
            'label' => 'LBL_DISCIPLINE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ps_proj_survey_project_name',
            'label' => 'LBL_PS_PROJ_SURVEY_PROJECT_FROM_PROJECT_TITLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
