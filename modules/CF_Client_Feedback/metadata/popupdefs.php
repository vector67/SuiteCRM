<?php
$popupMeta = array (
    'moduleMain' => 'CF_Client_Feedback',
    'varName' => 'CF_Client_Feedback',
    'orderBy' => 'cf_client_feedback.name',
    'whereClauses' => array (
  'name' => 'cf_client_feedback.name',
),
    'searchInputs' => array (
  0 => 'cf_client_feedback_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'CF_CLIENT_FEEDBACK_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CF_CLIENT_FEEDBACK_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'CF_CLIENT_FEEDBACK_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'cf_client_feedback_accounts_name',
  ),
  'CF_CLIENT_LOCATION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CF_CLIENT_LOCATION',
    'width' => '10%',
    'default' => true,
    'name' => 'cf_client_location',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'CF_CLIENT_FEEDBACK_PROJECT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CF_CLIENT_FEEDBACK_PROJECT_FROM_PROJECT_TITLE',
    'id' => 'CF_CLIENT_FEEDBACK_PROJECTPROJECT_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'cf_client_feedback_project_name',
  ),
  'CF_CLIENT_FEEDBACK_BS_BLUESKY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CF_CLIENT_FEEDBACK_BS_BLUESKY_FROM_BS_BLUESKY_TITLE',
    'id' => 'CF_CLIENT_FEEDBACK_BS_BLUESKYBS_BLUESKY_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'cf_client_feedback_bs_bluesky_name',
  ),
  'CF_TOPIC' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CF_TOPIC',
    'width' => '10%',
    'default' => true,
    'name' => 'cf_topic',
  ),
  'CF_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CF_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'cf_date',
  ),
),
);
