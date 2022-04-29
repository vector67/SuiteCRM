<?php
$module_name = 'CF_Client_Feedback';
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
        'width' => '10%',
      ),
      'cf_topic' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CF_TOPIC',
        'width' => '10%',
        'default' => true,
        'name' => 'cf_topic',
      ),
      'cf_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_CF_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'cf_date',
      ),
      'cf_client_feedback_project_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CF_CLIENT_FEEDBACK_PROJECT_FROM_PROJECT_TITLE',
        'id' => 'CF_CLIENT_FEEDBACK_PROJECTPROJECT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cf_client_feedback_project_name',
      ),
      'cf_client_feedback_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CF_CLIENT_FEEDBACK_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'CF_CLIENT_FEEDBACK_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cf_client_feedback_accounts_name',
      ),
      'cf_client_feedback_bs_bluesky_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CF_CLIENT_FEEDBACK_BS_BLUESKY_FROM_BS_BLUESKY_TITLE',
        'id' => 'CF_CLIENT_FEEDBACK_BS_BLUESKYBS_BLUESKY_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cf_client_feedback_bs_bluesky_name',
      ),
      'cf_client_location' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CF_CLIENT_LOCATION',
        'width' => '10%',
        'default' => true,
        'name' => 'cf_client_location',
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
