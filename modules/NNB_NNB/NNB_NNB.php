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

require_once('include/SugarObjects/templates/file/File.php');

class NNB_NNB extends File
{
    public $new_schema = true;
    public $module_dir = 'NNB_NNB';
    public $object_name = 'NNB_NNB';
    public $table_name = 'nnb_nnb';
    public $importable = true;

    public $id;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    public $document_name;
    public $filename;
    public $file_ext;
    public $file_mime_type;
    public $uploadfile;
    public $active_date;
    public $exp_date;
    public $category_id;
    public $subcategory_id;
    public $status_id;
    public $status;
    public $client_name;
    public $nnb_referral_trigger;
    public $funding_agency;
    public $opportunity_spend;
    public $partners;
    public $project_value;
    public $procurement_type;
    public $jv_revenue;
    public $contract_duration;
    public $tender_costs;
    public $payment_terms;
    public $scope_of_services;
    public $risks;
    public $cashflow_forecast;
    public $risk_management;
    public $other_info;
    public $proposal_manager;
    public $pi_insurance;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
	
    public function set_accept_status(&$user, $status, $decline_reason='')
    {
        if ($user->object_name == 'User') {
			$this->load_relationship('nnb_nnb_calls_1');
            $data_values = array('accept_status'=>$status);
			
			$calls = $this->nnb_nnb_calls_1->getBeans();
			foreach($calls as $call) {
				$call->load_relationship('users');
				if (in_array($user->id, $call->users->get())) {
					$relate_values = array('user_id'=>$user->id,'call_id'=>$call->id);
					$call->set_relationship($call->rel_users_table, $relate_values, true, true, $data_values);
					$call->status = $status;
					if ($decline_reason != '') {
						$call->rejected_reason_c = $decline_reason;
					}
					$call->save();
				}
			}
            global $current_user;

            if ($this->update_vcal) {
                vCal::cache_sugar_vcal($user);
            }
        } elseif ($user->object_name == 'Contact') {
            $relate_values = array('contact_id'=>$user->id,'meeting_id'=>$this->id);
            $data_values = array('accept_status'=>$status);
            $this->set_relationship($this->rel_contacts_table, $relate_values, true, true, $data_values);
        } elseif ($user->object_name == 'Lead') {
            $relate_values = array('lead_id'=>$user->id,'meeting_id'=>$this->id);
            $data_values = array('accept_status'=>$status);
            $this->set_relationship($this->rel_leads_table, $relate_values, true, true, $data_values);
        }
    }
	
}