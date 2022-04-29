<?php
$module_name = 'cv1_cv_resourcing';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'CV1_CV_RESOURCING_CV1_CV_ROLE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CV1_CV_RESOURCING_CV1_CV_ROLE_FROM_CV1_CV_ROLE_TITLE',
    'id' => 'CV1_CV_RESOURCING_CV1_CV_ROLECV1_CV_ROLE_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
