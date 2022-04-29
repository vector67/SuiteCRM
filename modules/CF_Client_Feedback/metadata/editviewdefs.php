<?php
$module_name = 'CF_Client_Feedback';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
      ),
      'maxColumns' => '2',
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => '',
          1 => 'document_name',
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
              'onchangeSetFileNameTo' => 'document_name',
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
