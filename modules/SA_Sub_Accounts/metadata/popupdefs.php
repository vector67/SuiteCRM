<?php
$popupMeta = array (
    'moduleMain' => 'SA_Sub_Accounts',
    'varName' => 'SA_Sub_Accounts',
    'orderBy' => 'sa_sub_accounts.name',
    'whereClauses' => array (
  'name' => 'sa_sub_accounts.name',
),
    'searchInputs' => array (
  0 => 'sa_sub_accounts_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'SA_SUB_ACCOUNTS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SA_SUB_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'SA_SUB_ACCOUNTS_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'sa_sub_accounts_accounts_name',
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
    'name' => 'currency_id',
  ),
  'CUSTOMERID' => 
  array (
    'type' => 'varchar',
    'label' => 'CustomerID',
    'width' => '10%',
    'default' => true,
  ),
  'PROSPECTID' => 
  array (
    'type' => 'varchar',
    'label' => 'ProspectID',
    'width' => '10%',
    'default' => true,
    'name' => 'prospectid',
  ),
  'SITEURN' => 
  array (
    'type' => 'varchar',
    'label' => 'SiteURN',
    'width' => '10%',
    'default' => true,
    'name' => 'siteurn',
  ),
  'ACTIVEFLAG' => 
  array (
    'type' => 'varchar',
    'label' => 'ActiveFlag',
    'width' => '10%',
    'default' => true,
    'name' => 'activeflag',
  ),
  'COUNTRYCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'CountryCode',
    'width' => '10%',
    'default' => true,
    'name' => 'countrycode',
  ),
  'ENTITYNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'EntityName',
    'width' => '10%',
    'default' => true,
    'name' => 'entityname',
  ),
),
);
