<?php
$module_name = 'po_PO_Travel_Trans';
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
      'po_po_travel_po_po_travel_trans_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PO_PO_TRAVEL_PO_PO_TRAVEL_TRANS_FROM_PO_PO_TRAVEL_TITLE',
        'id' => 'PO_PO_TRAVEL_PO_PO_TRAVEL_TRANSPO_PO_TRAVEL_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'po_po_travel_po_po_travel_trans_name',
      ),
      'po_po_travel_trans_o1_gl_codes_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PO_PO_TRAVEL_TRANS_O1_GL_CODES_FROM_O1_GL_CODES_TITLE',
        'id' => 'PO_PO_TRAVEL_TRANS_O1_GL_CODESO1_GL_CODES_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'po_po_travel_trans_o1_gl_codes_name',
      ),
      'po_travel_type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PO_TRAVEL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'po_travel_type',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'travel_trans_amount' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_TRAVEL_TRANS_AMOUNT',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'travel_trans_amount',
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
