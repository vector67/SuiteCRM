<?php
$module_name = 'arc_ar_comments';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'document_name',
    ),
    'advanced_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'arc_ar_comments_ar_ar_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ARC_AR_COMMENTS_AR_AR_FROM_AR_AR_TITLE',
        'id' => 'ARC_AR_COMMENTS_AR_ARAR_AR_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'arc_ar_comments_ar_ar_name',
      ),
      'arc_ar_comments_project_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ARC_AR_COMMENTS_PROJECT_FROM_PROJECT_TITLE',
        'id' => 'ARC_AR_COMMENTS_PROJECTPROJECT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'arc_ar_comments_project_name',
      ),
      'active_date' => 
      array (
        'name' => 'active_date',
        'default' => true,
        'width' => '10%',
      ),
      'exp_date' => 
      array (
        'name' => 'exp_date',
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
