<?php
$module_name = 'Leads_client_mapping';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'l2b_client_id',
            'label' => 'LBL_L2B_CLIENT_ID',
          ),
          1 => 
          array (
            'name' => 'leads_client_mapping_accounts_name',
            'label' => 'LBL_LEADS_CLIENT_MAPPING_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
