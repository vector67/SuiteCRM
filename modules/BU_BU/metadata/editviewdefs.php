<?php
$module_name = 'BU_BU';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'organizationid',
            'label' => 'LBL_ORGANIZATIONID',
          ),
          1 => 'description',
        ),
        2 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'bu_bu_reg_sub_location_name',
            'label' => 'LBL_BU_BU_REG_SUB_LOCATION_FROM_REG_SUB_LOCATION_TITLE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'divisioncode',
            'label' => 'LBL_DIVISIONCODE',
          ),
          1 => 
          array (
            'name' => 'divisionname',
            'label' => 'LBL_DIVISIONNAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'legalentcode',
            'label' => 'LBL_LEGALENTCODE',
          ),
          1 => 
          array (
            'name' => 'legalentname',
            'label' => 'LBL_LEGALENTNAME',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'functioncode',
            'label' => 'LBL_FUNCTIONCODE',
          ),
          1 => 
          array (
            'name' => 'functionname',
            'label' => 'LBL_FUNCTIONNAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'subfunctioncode',
            'label' => 'LBL_SUBFUNCTIONCODE',
          ),
          1 => 
          array (
            'name' => 'subfunctionname',
            'label' => 'LBL_SUBFUNCTIONNAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'subsubfunctioncode',
            'label' => 'LBL_SUBSUBFUNCTIONCODE',
          ),
          1 => 
          array (
            'name' => 'subsubfunctionname',
            'label' => 'LBL_SUBSUBFUNCTIONNAME',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'regiongrpcode',
            'label' => 'LBL_REGIONGRPCODE',
          ),
          1 => 
          array (
            'name' => 'regiongrpname',
            'label' => 'LBL_REGIONGRPNAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'regioncode',
            'label' => 'LBL_REGIONCODE',
          ),
          1 => 
          array (
            'name' => 'regionname',
            'label' => 'LBL_REGIONNAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'locationcode',
            'label' => 'LBL_LOCATIONCODE',
          ),
          1 => 
          array (
            'name' => 'locationname',
            'label' => 'LBL_LOCATIONNAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sublocationcode',
            'label' => 'LBL_SUBLOCATIONCODE',
          ),
          1 => 
          array (
            'name' => 'sublocationname',
            'label' => 'LBL_SUBLOCATIONNAME',
          ),
        ),
      ),
    ),
  ),
);
;
?>
