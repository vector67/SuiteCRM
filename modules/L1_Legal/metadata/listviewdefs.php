<?php
$module_name = 'L1_Legal';
$OBJECT_NAME = 'L1_LEGAL';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => true,
  ),
  'LEGAL_CASE_NO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEGAL_CASE_NO',
    'width' => '10%',
    'default' => true,
  ),
  'LEGAL_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LEGAL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'LEGAL_PROJ_NO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEGAL_PROJ_NO',
    'width' => '10%',
    'default' => true,
  ),
  'LEGAL_TOTAL_OUTSTANDING' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_LEGAL_TOTAL_OUTSTANDING',
    'width' => '10%',
    'default' => true,
  ),
  'LEGAL_REGION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LEGAL_REGION',
    'width' => '10%',
    'default' => true,
  ),
  'LEGAL_FUNCTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LEGAL_FUNCTION',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);
;
?>
