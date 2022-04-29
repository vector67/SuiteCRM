<?php
$module_name = 'CF_Client_Feedback';
$_object_name = 'cf_client_feedback';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cf_client_feedback_accounts_name',
            'label' => 'LBL_CF_CLIENT_FEEDBACK_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cf_date',
            'label' => 'LBL_CF_DATE',
          ),
          1 => 
          array (
            'name' => 'cf_topic',
            'studio' => 'visible',
            'label' => 'LBL_CF_TOPIC',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cf_client_location',
            'studio' => 'visible',
            'label' => 'LBL_CF_CLIENT_LOCATION',
          ),
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cf_subject',
            'studio' => 'visible',
            'label' => 'LBL_CF_SUBJECT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'cf_client_feedback_bs_bluesky_name',
            'label' => 'LBL_CF_CLIENT_FEEDBACK_BS_BLUESKY_FROM_BS_BLUESKY_TITLE',
          ),
          1 => 
          array (
            'name' => 'cf_bluesky_link',
            'label' => 'LBL_CF_BLUESKY_LINK',
          ),
        ),
      ),
    ),
  ),
);
;
?>
