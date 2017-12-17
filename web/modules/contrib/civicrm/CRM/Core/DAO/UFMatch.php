<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
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
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/UFMatch.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:c83bd8ebf7ad3a71d2bdaae1767cdcbb)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_UFMatch constructor.
 */
class CRM_Core_DAO_UFMatch extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_uf_match';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * System generated ID.
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Which Domain is this match entry for
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   * UF ID
   *
   * @var int unsigned
   */
  public $uf_id;
  /**
   * UF Name
   *
   * @var string
   */
  public $uf_name;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $contact_id;
  /**
   * UI language preferred by the given user/contact
   *
   * @var string
   */
  public $language;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_uf_match';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'domain_id', 'civicrm_domain', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('UF Match ID') ,
          'description' => 'System generated ID.',
          'required' => true,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('UF Match Domain ID') ,
          'description' => 'Which Domain is this match entry for',
          'required' => true,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => array(
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'uf_id' => array(
          'name' => 'uf_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('CMS ID') ,
          'description' => 'UF ID',
          'required' => true,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
        ) ,
        'uf_name' => array(
          'name' => 'uf_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('CMS Unique Identifier') ,
          'description' => 'UF Name',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
        ) ,
        'contact_id' => array(
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('CiviCRM Contact ID') ,
          'description' => 'FK to Contact ID',
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'language' => array(
          'name' => 'language',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Preferred Language') ,
          'description' => 'UI language preferred by the given user/contact',
          'maxlength' => 5,
          'size' => CRM_Utils_Type::SIX,
          'table_name' => 'civicrm_uf_match',
          'entity' => 'UFMatch',
          'bao' => 'CRM_Core_BAO_UFMatch',
          'localizable' => 0,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'uf_match', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'uf_match', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array(
      'I_civicrm_uf_match_uf_id' => array(
        'name' => 'I_civicrm_uf_match_uf_id',
        'field' => array(
          0 => 'uf_id',
        ) ,
        'localizable' => false,
        'sig' => 'civicrm_uf_match::0::uf_id',
      ) ,
      'UI_uf_name_domain_id' => array(
        'name' => 'UI_uf_name_domain_id',
        'field' => array(
          0 => 'uf_name',
          1 => 'domain_id',
        ) ,
        'localizable' => false,
        'unique' => true,
        'sig' => 'civicrm_uf_match::1::uf_name::domain_id',
      ) ,
      'UI_contact_domain_id' => array(
        'name' => 'UI_contact_domain_id',
        'field' => array(
          0 => 'contact_id',
          1 => 'domain_id',
        ) ,
        'localizable' => false,
        'unique' => true,
        'sig' => 'civicrm_uf_match::1::contact_id::domain_id',
      ) ,
    );
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}