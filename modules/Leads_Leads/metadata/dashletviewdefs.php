<?php
$dashletData['Leads_LeadsDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Gregory Palmer',
  ),
);
$dashletData['Leads_LeadsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'leads_l2b_description' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_DESCRIPTION',
    'width' => '10%',
    'default' => true,
    'name' => 'leads_l2b_description',
  ),
  'leads_l2b_closing_date' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LEADS_L2B_CLOSING_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'leads_l2b_closing_date',
  ),
  'leads_l2b_site_inspection' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_LEADS_L2B_SITE_INSPECTION',
    'width' => '10%',
    'default' => true,
    'name' => 'leads_l2b_site_inspection',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
  'leads_l2b_contract_no' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEADS_L2B_CONTRACT_NO',
    'width' => '10%',
    'default' => false,
    'name' => 'leads_l2b_contract_no',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
