<?php
$module_name = 'po_PO_Travel_Trans';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'po_travel_type',
            'studio' => 'visible',
            'label' => 'LBL_PO_TRAVEL_TYPE',
          ),
          1 => 
          array (
            'name' => 'po_po_travel_trans_o1_gl_codes_name',
            'label' => 'LBL_PO_PO_TRAVEL_TRANS_O1_GL_CODES_FROM_O1_GL_CODES_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'travel_trans_amount',
            'label' => 'LBL_TRAVEL_TRANS_AMOUNT',
          ),
        ),
      ),
    ),
  ),
);
;
?>
