<?php
$module_name = 'po_PO_Travel';
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
      'po_po_travel_bst_bst_project_lookup_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PO_PO_TRAVEL_BST_BST_PROJECT_LOOKUP_FROM_BST_BST_PROJECT_LOOKUP_TITLE',
        'id' => 'PO_PO_TRAVEL_BST_BST_PROJECT_LOOKUPBST_BST_PROJECT_LOOKUP_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'po_po_travel_bst_bst_project_lookup_name',
      ),
      'po_gest_traveller' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PO_GEST_TRAVELLER',
        'width' => '10%',
        'default' => true,
        'name' => 'po_gest_traveller',
      ),
      'po_po_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PO_PO_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'po_po_number',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'po_arrival_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PO_ARRIVAL_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'po_arrival_date',
      ),
      'po_departure_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PO_DEPARTURE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'po_departure_date',
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
