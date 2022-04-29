<?php
$module_name = 'NNB_NNB';
$_object_name = 'nnb_nnb';
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
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'active_date',
          1 => 'exp_date',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'client_name',
            'label' => 'LBL_CLIENT_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nnb_referral_trigger',
            'studio' => 'visible',
            'label' => 'LBL_NNB_REFERRAL_TRIGGER',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'funding_agency',
            'label' => 'LBL_FUNDING_AGENCY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_spend',
            'label' => 'LBL_OPPORTUNITY_SPEND ',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'partners',
            'studio' => 'visible',
            'label' => 'LBL_PARTNERS',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'procurement_type',
            'studio' => 'visible',
            'label' => 'LBL_PROCUREMENT_TYPE',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'project_value',
            'studio' => 'visible',
            'label' => 'LBL_PROJECT_VALUE',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'smec_revenue',
            'label' => 'LBL_SMEC_REVENUE',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'jv_revenue',
            'label' => 'LBL_JV_REVENUE',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'contract_duration',
            'label' => 'LBL_CONTRACT_DURATION',
          ),
          1 => '',
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'tender_costs',
            'label' => 'LBL_TENDER_COSTS',
          ),
          1 => '',
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'payment_terms',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_TERMS',
          ),
          1 => '',
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'proposed_payment_terms',
            'label' => 'LBL_PROPOSED_PAYMENT_TERMS',
          ),
          1 => '',
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'pi_insurance',
            'studio' => 'visible',
            'label' => 'LBL_PI_INSURANCE',
          ),
          1 => '',
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'scope_of_services',
            'studio' => 'visible',
            'label' => 'LBL_SCOPE_OF_SERVICES',
          ),
          1 => '',
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'cashflow_forecast',
            'studio' => 'visible',
            'label' => 'LBL_CASHFLOW_FORECAST',
          ),
          1 => '',
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'risk_management',
            'studio' => 'visible',
            'label' => 'LBL_RISK_MANAGEMENT',
          ),
          1 => '',
        ),
        20 => 
        array (
          0 => 
          array (
            'name' => 'risks',
            'studio' => 'visible',
            'label' => 'LBL_RISKS',
          ),
          1 => '',
        ),
        21 => 
        array (
          0 => 
          array (
            'name' => 'other_info',
            'studio' => 'visible',
            'label' => 'LBL_OTHER_INFO',
          ),
          1 => '',
        ),
        22 => 
        array (
          0 => 
          array (
            'name' => 'proposal_manager',
            'label' => 'LBL_PROPOSAL_MANAGER',
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
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
