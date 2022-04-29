<?php
$dashletData['IP_ID_ProjectsDashlet']['searchFields'] = array (
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
$dashletData['IP_ID_ProjectsDashlet']['columns'] = array (
  'document_name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'id_project_budget_ya' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ID_PROJECT_BUDGET_YA',
    'width' => '10%',
    'default' => true,
  ),
  'id_project_budget_yb' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ID_PROJECT_BUDGET_YB',
    'width' => '10%',
    'default' => true,
  ),
  'id_project_budget_yc' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ID_PROJECT_BUDGET_YC',
    'width' => '10%',
    'default' => true,
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
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
