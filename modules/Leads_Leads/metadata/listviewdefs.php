<?php
$module_name = 'Leads_Leads';
$listViewDefs [$module_name] = 
array (
  'LEADS_L2B_CONTRACT_NO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_CONTRACT_NO',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'LEADS_L2B_CLIENT_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_CLIENT_NAME',
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
  'LEADS_L2B_CLOSING_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LEADS_L2B_CLOSING_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'LEADS_L2B_CONTRACT_PERIOD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_CONTRACT_PERIOD',
    'width' => '10%',
    'default' => true,
  ),
  'LEADS_L2B_STATE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_STATE',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_CIDB' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_LEADS_L2B_CIDB',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_DOC_COLLECTION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_DOC_COLLECTION',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_LANGUAGE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_LANGUAGE',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_RESTRICTIONS' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_LEADS_L2B_RESTRICTIONS',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_SITE_INSPECTION' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LEADS_L2B_SITE_INSPECTION',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_CONTACT_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_CONTACT_NUMBER',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_CONTACT_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_CONTACT_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_REGION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LEADS_L2B_REGION',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_DESCRIPTION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_DESCRIPTION',
    'width' => '10%',
    'default' => false,
  ),
  'LEADS_L2B_PUBLISHED_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LEADS_L2B_PUBLISHED_DATE',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
