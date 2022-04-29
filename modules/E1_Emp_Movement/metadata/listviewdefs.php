<?php
$module_name = 'E1_Emp_Movement';
$OBJECT_NAME = 'E1_EMP_MOVEMENT';
$listViewDefs [$module_name] = 
array (
  'EMP_NAME1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMP_NAME1',
    'width' => '10%',
    'default' => true,
  ),
  'EMP_USERNAME1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMP_USERNAME1',
    'width' => '10%',
    'default' => true,
  ),
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => true,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'EMP_MOVE_PROP_FUNCTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_EMP_MOVE_PROP_FUNCTION',
    'width' => '10%',
    'default' => true,
  ),
  'EMP_MOVE_PROP_WO' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_EMP_MOVE_PROP_WO',
    'width' => '10%',
    'default' => true,
  ),
  'EMP_MOVE_PROP_LOCATION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_EMP_MOVE_PROP_LOCATION',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
  ),
  'EMP_MOVE_FUNCTION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMP_MOVE_FUNCTION',
    'width' => '10%',
    'default' => false,
  ),
  'EMP_WO1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMP_WO1',
    'width' => '10%',
    'default' => false,
  ),
  'EMP_LOCATION1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMP_LOCATION1',
    'width' => '10%',
    'default' => false,
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
  'UPLOADFILE' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILE_UPLOAD',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
