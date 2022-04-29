<?php
$module_name = 'Leads_Leads';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
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
          0 => 'name',
          1 => 
          array (
            'name' => 'leads_l2b_contract_no',
            'label' => 'LBL_LEADS_L2B_CONTRACT_NO',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'leads_l2b_description',
            'label' => 'LBL_LEADS_L2B_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'leads_l2b_restrictions',
            'studio' => 'visible',
            'label' => 'LBL_LEADS_L2B_RESTRICTIONS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'leads_l2b_doc_collection',
            'label' => 'LBL_LEADS_L2B_DOC_COLLECTION',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'leads_l2b_client_name',
            'label' => 'LBL_LEADS_L2B_CLIENT_NAME',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'leads_l2b_region',
            'studio' => 'visible',
            'label' => 'LBL_LEADS_L2B_REGION',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'leads_l2b_language',
            'label' => 'LBL_LEADS_L2B_LANGUAGE',
          ),
          1 => 
          array (
            'name' => 'leads_l2b_cidb',
            'studio' => 'visible',
            'label' => 'LBL_LEADS_L2B_CIDB',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'leads_leads_accounts_name',
            'label' => 'LBL_LEADS_LEADS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'leads_l2b_state',
            'label' => 'LBL_LEADS_L2B_STATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'leads_awards_leads_leads_name',
            'label' => 'LBL_LEADS_AWARDS_LEADS_LEADS_FROM_LEADS_AWARDS_TITLE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'leads_l2b_closing_date',
            'label' => 'LBL_LEADS_L2B_CLOSING_DATE',
          ),
          1 => 
          array (
            'name' => 'leads_l2b_site_inspection',
            'label' => 'LBL_LEADS_L2B_SITE_INSPECTION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'leads_l2b_contract_period',
            'label' => 'LBL_LEADS_L2B_CONTRACT_PERIOD',
          ),
          1 => 
          array (
            'name' => 'leads_l2b_published_date',
            'label' => 'LBL_LEADS_L2B_PUBLISHED_DATE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
