<?php
$module_name = 'IP_ID_Projects';
$OBJECT_NAME = 'IP_ID_PROJECTS';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'IP_ID_PROJECTS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_IP_ID_PROJECTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'IP_ID_PROJECTS_ACCOUNTSACCOUNTS_IDA',
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
  'ID_PROJECTS_DEP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ID_PROJECTS_DEP',
    'width' => '10%',
    'default' => true,
  ),
  'ID_PROJECT_BUDGET_YA' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ID_PROJECT_BUDGET_YA',
    'width' => '10%',
    'default' => true,
  ),
  'ID_PROJECT_BUDGET_YB' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ID_PROJECT_BUDGET_YB',
    'width' => '10%',
    'default' => true,
  ),
  'ID_PROJECT_BUDGET_YC' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ID_PROJECT_BUDGET_YC',
    'width' => '10%',
    'default' => true,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => false,
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => false,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
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
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => false,
  ),
  'ID_PROJECT_LOCATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ID_PROJECT_LOCATION',
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
  'ID_PROJECT_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ID_PROJECT_TYPE',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
