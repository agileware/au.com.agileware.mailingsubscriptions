<?php
use CRM_Mailingsubscriptions_ExtensionUtil as E;

class CRM_Mailingsubscriptions_BAO_GroupContactsLog extends CRM_Mailingsubscriptions_DAO_GroupContactsLog {

  /**
   * Create a new GroupContactsLog based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Mailingsubscriptions_DAO_GroupContactsLog|NULL
   *
  public static function create($params) {
    $className = 'CRM_Mailingsubscriptions_DAO_GroupContactsLog';
    $entityName = 'GroupContactsLog';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */

}
