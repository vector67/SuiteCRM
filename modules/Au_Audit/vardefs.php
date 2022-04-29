<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$dictionary['Au_Audit'] = array(
    'table' => 'au_audit',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
  'delivery_schedule' => 
  array (
    'required' => false,
    'name' => 'delivery_schedule',
    'vname' => 'LBL_DELIVERY_SCHEDULE',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'present_status' => 
  array (
    'required' => false,
    'name' => 'present_status',
    'vname' => 'LBL_PRESENT_STATUS',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'resourcing_subs' => 
  array (
    'required' => false,
    'name' => 'resourcing_subs',
    'vname' => 'LBL_RESOURCING_SUBS',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '3. RESOURCES AND SUB-CONSULTANT ISSUES ',
    'help' => '3. RESOURCES AND SUB-CONSULTANT ISSUES ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'variations' => 
  array (
    'required' => false,
    'name' => 'variations',
    'vname' => 'LBL_VARIATIONS',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'payments' => 
  array (
    'required' => false,
    'name' => 'payments',
    'vname' => 'LBL_PAYMENTS',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'financial_status' => 
  array (
    'required' => false,
    'name' => 'financial_status',
    'vname' => 'LBL_FINANCIAL_STATUS',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '6. PROJECT FINANCIAL STATUS AS PER THE LATEST MONTHLY PROJECT PROFITABILITY REPORT ',
    'help' => '6. PROJECT FINANCIAL STATUS AS PER THE LATEST MONTHLY PROJECT PROFITABILITY REPORT ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'risks' => 
  array (
    'required' => false,
    'name' => 'risks',
    'vname' => 'LBL_RISKS',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '8 Risks',
    'help' => '8 Risks',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'integration_smec' => 
  array (
    'required' => false,
    'name' => 'integration_smec',
    'vname' => 'LBL_INTEGRATION_SMEC',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '9. INTEGRATION WITH SMEC/SJ GROUP ',
    'help' => '9. INTEGRATION WITH SMEC/SJ GROUP ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'compliance_issues' => 
  array (
    'required' => false,
    'name' => 'compliance_issues',
    'vname' => 'LBL_COMPLIANCE_ISSUES',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '11. ANY COMPLIANCE RELATED ISSUES ',
    'help' => '11. ANY COMPLIANCE RELATED ISSUES ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'issues' => 
  array (
    'required' => false,
    'name' => 'issues',
    'vname' => 'LBL_ISSUES',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '10. ANY ISSUES THE PM/TL LIKE TO RAISE ',
    'help' => '10. ANY ISSUES THE PM/TL LIKE TO RAISE ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'general_observations' => 
  array (
    'required' => false,
    'name' => 'general_observations',
    'vname' => 'LBL_GENERAL_OBSERVATIONS',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '12. OVERALL OBSERVATION OF THE PROJECT BOARD ',
    'help' => '12. OVERALL OBSERVATION OF THE PROJECT BOARD ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'next_meeting' => 
  array (
    'required' => false,
    'name' => 'next_meeting',
    'vname' => 'LBL_NEXT_MEETING',
    'type' => 'datetimecombo',
    'massupdate' => '1',
    'no_default' => false,
    'comments' => 'NEXT PROJECT BOARD MEETING ',
    'help' => 'NEXT PROJECT BOARD MEETING ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
    'dbType' => 'datetime',
    'display_default' => '+1 month&12:00pm',
  ),
  'client_relationship' => 
  array (
    'required' => false,
    'name' => 'client_relationship',
    'vname' => 'LBL_CLIENT_RELATIONSHIP',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '7. RELATIONSHIP WITH THE CLIENT (INCLUDING COMMENT RE EXECUTIVE LIAISON WITH CLIENT) ',
    'help' => '7. RELATIONSHIP WITH THE CLIENT (INCLUDING COMMENT RE EXECUTIVE LIAISON WITH CLIENT) ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('Au_Audit', 'Au_Audit', array('basic','assignable','security_groups'));