<?php
$module_name = 'L1_Legal';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'document_name',
    ),
    'advanced_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
      ),
      'category_id' => 
      array (
        'name' => 'category_id',
        'default' => true,
      ),
      'active_date' => 
      array (
        'name' => 'active_date',
        'default' => true,
      ),
      'exp_date' => 
      array (
        'name' => 'exp_date',
        'default' => true,
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
