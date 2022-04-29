<?php
$module_name = 'CF_Client_Feedback';
$OBJECT_NAME = 'CF_CLIENT_FEEDBACK';
$listViewDefs [$module_name] = 
array (
  'CF_CLIENT_FEEDBACK_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CF_CLIENT_FEEDBACK_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'CF_CLIENT_FEEDBACK_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CF_CLIENT_LOCATION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CF_CLIENT_LOCATION',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'CF_CLIENT_FEEDBACK_PROJECT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CF_CLIENT_FEEDBACK_PROJECT_FROM_PROJECT_TITLE',
    'id' => 'CF_CLIENT_FEEDBACK_PROJECTPROJECT_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CF_CLIENT_FEEDBACK_BS_BLUESKY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CF_CLIENT_FEEDBACK_BS_BLUESKY_FROM_BS_BLUESKY_TITLE',
    'id' => 'CF_CLIENT_FEEDBACK_BS_BLUESKYBS_BLUESKY_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CF_TOPIC' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CF_TOPIC',
    'width' => '10%',
    'default' => true,
  ),
  'CF_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CF_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => false,
    'sortable' => false,
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => false,
  ),
  'SUBCATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => false,
  ),
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => false,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
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
  'CF_BLUESKY_LINK' => 
  array (
    'type' => 'url',
    'label' => 'LBL_CF_BLUESKY_LINK',
    'width' => '10%',
    'default' => false,
  ),
  'CF_SUBJECT' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_CF_SUBJECT',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'UPLOADFILE' => 
  array (
    'type' => 'file',
    'label' => 'LBL_FILE_UPLOAD',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
