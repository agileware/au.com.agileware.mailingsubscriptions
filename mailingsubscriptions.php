<?php

require_once 'mailingsubscriptions.civix.php';
use CRM_Mailingsubscriptions_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function mailingsubscriptions_civicrm_config(&$config) {
  _mailingsubscriptions_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function mailingsubscriptions_civicrm_install() {
  _mailingsubscriptions_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function mailingsubscriptions_civicrm_enable() {
  _mailingsubscriptions_civix_civicrm_enable();
}
