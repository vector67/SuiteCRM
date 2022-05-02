<?php
$module_name = 'F_SubSubFunction';
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
      'f_subsubfunction_f_subfunction_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_F_SUBSUBFUNCTION_F_SUBFUNCTION_FROM_F_SUBFUNCTION_TITLE',
        'id' => 'F_SUBSUBFUNCTION_F_SUBFUNCTIONF_SUBFUNCTION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'f_subsubfunction_f_subfunction_name',
      ),
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
      ),
      'functioncode' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FUNCTIONCODE',
        'width' => '10%',
        'default' => true,
        'name' => 'functioncode',
      ),
      'functionname' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FUNCTIONNAME',
        'width' => '10%',
        'default' => true,
        'name' => 'functionname',
      ),
      'subfunctioncode' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SUBFUNCTIONCODE',
        'width' => '10%',
        'default' => true,
        'name' => 'subfunctioncode',
      ),
      'subfunctionname' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SUBFUNCTIONNAME',
        'width' => '10%',
        'default' => true,
        'name' => 'subfunctionname',
      ),
      'subsubfunctioncode' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SUBSUBFUNCTIONCODE',
        'width' => '10%',
        'default' => true,
        'name' => 'subsubfunctioncode',
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