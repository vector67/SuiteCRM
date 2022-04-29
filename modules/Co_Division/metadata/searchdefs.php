<?php
$module_name = 'Co_Division';
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
      'co_company_co_division_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CO_COMPANY_CO_DIVISION_FROM_CO_COMPANY_TITLE',
        'id' => 'CO_COMPANY_CO_DIVISIONCO_COMPANY_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'co_company_co_division_name',
      ),
      'divisioncode' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DIVISIONCODE',
        'width' => '10%',
        'default' => true,
        'name' => 'divisioncode',
      ),
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
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
