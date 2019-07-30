<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 5                                                  |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2019                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 */
class CRM_ACL_Form_EntityRole extends CRM_Admin_Form {

  /**
   * Build the form object.
   */
  public function buildQuickForm() {
    parent::buildQuickForm();

    if ($this->_action & CRM_Core_Action::DELETE) {
      return;
    }

    $aclRoles = ['' => ts('- select -')] + CRM_Core_OptionGroup::values('acl_role');
    $this->add('select', 'acl_role_id', ts('ACL Role'),
      $aclRoles, TRUE
    );

    $label = ts('Assigned to');
    $group = ['' => ts('- select group -')] + CRM_Core_PseudoConstant::staticGroup(FALSE, 'Access');
    $this->add('select', 'entity_id', $label, $group, TRUE, ['class' => 'crm-select2 huge']);

    $this->add('checkbox', 'is_active', ts('Enabled?'));
  }

  /**
   * Process the form submission.
   */
  public function postProcess() {
    CRM_ACL_BAO_Cache::resetCache();

    if ($this->_action & CRM_Core_Action::DELETE) {
      CRM_ACL_BAO_EntityRole::del($this->_id);
      CRM_Core_Session::setStatus(ts('Selected Entity Role has been deleted.'), ts('Record Deleted'), 'success');
    }
    else {
      $params = $this->controller->exportValues($this->_name);
      if ($this->_id) {
        $params['id'] = $this->_id;
      }

      $params['entity_table'] = 'civicrm_group';
      CRM_ACL_BAO_EntityRole::create($params);
    }
  }

}
