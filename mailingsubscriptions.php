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
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function mailingsubscriptions_civicrm_postInstall() {
  _mailingsubscriptions_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function mailingsubscriptions_civicrm_uninstall() {
  _mailingsubscriptions_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function mailingsubscriptions_civicrm_enable() {
  _mailingsubscriptions_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function mailingsubscriptions_civicrm_disable() {
  _mailingsubscriptions_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function mailingsubscriptions_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _mailingsubscriptions_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function mailingsubscriptions_civicrm_entityTypes(&$entityTypes) {
  _mailingsubscriptions_civix_civicrm_entityTypes($entityTypes);
}
