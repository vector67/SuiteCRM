<?php
$module_name = 'F_SubFunction';
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
            'name' => 'f_subfunction_f_function_name',
            'label' => 'LBL_F_SUBFUNCTION_F_FUNCTION_FROM_F_FUNCTION_TITLE',
          ),
          1 => 
          array (
            'name' => 'subfunctioncode',
            'label' => 'LBL_SUBFUNCTIONCODE',
          ),
        ),
        2 => 
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
      ),
    ),
  ),
);
;
?>
