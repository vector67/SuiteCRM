<?php
$module_name = 'SA_Sub_Accounts';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
  ),
  'SA_SUB_ACCOUNTS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SA_SUB_ACCOUNTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'SA_SUB_ACCOUNTS_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PROSPECTID' => 
  array (
    'type' => 'varchar',
    'label' => 'ProspectID',
    'width' => '10%',
    'default' => true,
  ),
  'SITEURN' => 
  array (
    'type' => 'varchar',
    'label' => 'SiteURN',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVEFLAG' => 
  array (
    'type' => 'varchar',
    'label' => 'ActiveFlag',
    'width' => '10%',
    'default' => true,
  ),
  'COUNTRYCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'CountryCode',
    'width' => '10%',
    'default' => true,
  ),
  'ENTITYNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'EntityName',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
