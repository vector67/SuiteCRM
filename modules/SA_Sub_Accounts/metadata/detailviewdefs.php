<?php
$module_name = 'SA_Sub_Accounts';
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
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
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
            'name' => 'entityshortname',
            'label' => 'EntityShortName',
          ),
          1 => 
          array (
            'name' => 'customertypecode',
            'label' => 'CustomerTypeCode',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'activeflag',
            'label' => 'ActiveFlag',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'customerid',
            'label' => 'CustomerID',
          ),
          1 => 
          array (
            'name' => 'entityname',
            'label' => 'EntityName',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'parentcustomerid',
            'label' => 'ParentCustomerID',
          ),
          1 => 
          array (
            'name' => 'sa_sub_accounts_accounts_name',
            'label' => 'LBL_SA_SUB_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'custcreditlimit',
            'label' => 'CustCreditLimit',
          ),
          1 => 
          array (
            'name' => 'defaultcommcode',
            'label' => 'DefaultCommCode',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'paymenttermscode',
            'label' => 'PaymentTermsCode',
          ),
          1 => 
          array (
            'name' => 'prospectid',
            'label' => 'ProspectID',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'siteurn',
            'label' => 'SiteURN',
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
            'name' => 'currencycode',
            'label' => 'CurrencyCode',
          ),
          1 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'initials',
            'label' => 'Initials',
          ),
          1 => 
          array (
            'name' => 'ownershipcode',
            'label' => 'OwnershipCode',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'taxcode',
            'label' => 'TaxCode',
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
            'name' => 'address',
            'label' => 'Address',
          ),
          1 => 
          array (
            'name' => 'city',
            'label' => 'City',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'statecode',
            'label' => 'StateCode',
          ),
          1 => 
          array (
            'name' => 'postalcode',
            'label' => 'PostalCode',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'countrycode',
            'label' => 'CountryCode',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone',
            'label' => 'PHONE',
          ),
          1 => 
          array (
            'name' => 'fax',
            'label' => 'FAX',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
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
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'lastupdatedate',
            'label' => 'LastUpdateDate',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'lastupdateuserid',
            'label' => 'LastUpdateUserID',
          ),
        ),
      ),
    ),
  ),
);
;
?>
