<?php
$module_name = 'H1_Employee_custom';
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
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
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
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
        ),
        1 => 
        array (
          0 => 'last_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'known_as_c',
            'label' => 'LBL_KNOWN_AS_C',
          ),
        ),
        3 => 
        array (
          0 => 'title',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'emp_code_c',
            'label' => 'LBL_EMP_CODE_C',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'emp_region',
            'studio' => 'visible',
            'label' => 'LBL_EMP_REGION',
          ),
          1 => 
          array (
            'name' => 'emp_office',
            'studio' => 'visible',
            'label' => 'LBL_EMP_OFFICE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'emp_function',
            'studio' => 'visible',
            'label' => 'LBL_EMP_FUNCTION',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'emp_org',
            'studio' => 'visible',
            'label' => 'LBL_EMP_ORG',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
