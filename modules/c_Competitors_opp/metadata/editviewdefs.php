<?php
$module_name = 'c_Competitors_opp';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          0 => 'document_name',
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'c_competitors_opp_accounts_name',
            'label' => 'LBL_C_COMPETITORS_OPP_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'c_competitors_opp_opportunities_name',
            'label' => 'LBL_C_COMPETITORS_OPP_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'c_price',
            'label' => 'LBL_C_PRICE',
          ),
          1 => 
          array (
            'name' => 'description',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'c_closing_date',
            'label' => 'LBL_C_CLOSING_DATE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
