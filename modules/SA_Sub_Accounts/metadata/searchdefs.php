<?php
$module_name = 'SA_Sub_Accounts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'customerid' => 
      array (
        'type' => 'varchar',
        'label' => 'CustomerID',
        'width' => '10%',
        'default' => true,
        'name' => 'customerid',
      ),
      'prospectid' => 
      array (
        'type' => 'varchar',
        'label' => 'ProspectID',
        'width' => '10%',
        'default' => true,
        'name' => 'prospectid',
      ),
      'activeflag' => 
      array (
        'type' => 'varchar',
        'label' => 'ActiveFlag',
        'width' => '10%',
        'default' => true,
        'name' => 'activeflag',
      ),
      'siteurn' => 
      array (
        'type' => 'varchar',
        'label' => 'SiteURN',
        'width' => '10%',
        'default' => true,
        'name' => 'siteurn',
      ),
      'entityname' => 
      array (
        'type' => 'varchar',
        'label' => 'EntityName',
        'width' => '10%',
        'default' => true,
        'name' => 'entityname',
      ),
      'sa_sub_accounts_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SA_SUB_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'SA_SUB_ACCOUNTS_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sa_sub_accounts_accounts_name',
      ),
      'countrycode' => 
      array (
        'type' => 'varchar',
        'label' => 'CountryCode',
        'width' => '10%',
        'default' => true,
        'name' => 'countrycode',
      ),
      'postalcode' => 
      array (
        'type' => 'varchar',
        'label' => 'PostalCode',
        'width' => '10%',
        'default' => true,
        'name' => 'postalcode',
      ),
      'statecode' => 
      array (
        'type' => 'varchar',
        'label' => 'StateCode',
        'width' => '10%',
        'default' => true,
        'name' => 'statecode',
      ),
      'city' => 
      array (
        'type' => 'varchar',
        'label' => 'City',
        'width' => '10%',
        'default' => true,
        'name' => 'city',
      ),
      'currency_id' => 
      array (
        'type' => 'currency_id',
        'studio' => 'visible',
        'label' => 'LBL_CURRENCY',
        'width' => '10%',
        'default' => true,
        'name' => 'currency_id',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
