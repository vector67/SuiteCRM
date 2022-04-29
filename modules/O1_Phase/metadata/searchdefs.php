<?php
$module_name = 'O1_Phase';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phase_budget' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_PHASE_BUDGET',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'phase_budget',
      ),
      'global_funct_text2' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_GLOBAL_FUNCT_TEXT2',
        'width' => '10%',
        'default' => true,
        'name' => 'global_funct_text2',
      ),
      'o1_phase_project_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_O1_PHASE_PROJECT_FROM_PROJECT_TITLE',
        'id' => 'O1_PHASE_PROJECTPROJECT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'o1_phase_project_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
