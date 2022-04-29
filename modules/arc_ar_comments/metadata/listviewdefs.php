<?php
$module_name = 'arc_ar_comments';
$OBJECT_NAME = 'ARC_AR_COMMENTS';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'ARC_AR_COMMENTS_AR_AR_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ARC_AR_COMMENTS_AR_AR_FROM_AR_AR_TITLE',
    'id' => 'ARC_AR_COMMENTS_AR_ARAR_AR_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ARC_AR_COMMENTS_PROJECT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ARC_AR_COMMENTS_PROJECT_FROM_PROJECT_TITLE',
    'id' => 'ARC_AR_COMMENTS_PROJECTPROJECT_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => true,
    'sortable' => false,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
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
