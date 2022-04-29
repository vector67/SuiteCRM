<?php
$module_name = 'po_PO_Travel';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'po_po_number',
            'label' => 'LBL_PO_PO_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'po_departure_date',
            'label' => 'LBL_PO_DEPARTURE_DATE',
          ),
          1 => 
          array (
            'name' => 'po_arrival_date',
            'label' => 'LBL_PO_ARRIVAL_DATE',
          ),
        ),
        1 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'po_gest_traveller',
            'label' => 'LBL_PO_GEST_TRAVELLER',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'po_po_travel_bst_bst_project_lookup_name',
            'label' => 'LBL_PO_PO_TRAVEL_BST_BST_PROJECT_LOOKUP_FROM_BST_BST_PROJECT_LOOKUP_TITLE',
          ),
          1 => 
          array (
            'name' => 'po_text1',
            'label' => 'LBL_PO_TEXT1',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'po_subtotal',
            'label' => 'LBL_PO_SUBTOTAL',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'po_vat',
            'label' => 'LBL_PO_VAT',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'po_total',
            'label' => 'LBL_PO_TOTAL',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
