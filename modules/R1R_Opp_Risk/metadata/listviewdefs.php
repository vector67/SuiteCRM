<?php
$module_name = 'R1R_Opp_Risk';
$listViewDefs [$module_name] = 
array (
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'RISK_OPP_PREP' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_RISK_OPP_PREP',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
