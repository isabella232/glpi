<?php
/*
 * @version $Id$
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2015 Teclib'.

 http://glpi-project.org

 based on GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2014 by the INDEPNET Development Team.
 
 -------------------------------------------------------------------------

 Author : DELMAS Rémi
	
 --------------------------------------------------------------------------
 */

/** @file
* @brief
*/

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

class Computer_SoftwareVersion extends CommonDBRelation {

   // From CommonDBRelation
   static public $itemtype_1 = 'Computer';
   static public $items_id_1 = 'computers_id';
   static public $itemtype_2 = 'SoftwareVersion';
   static public $items_id_2 = 'softwareversions_id';


   static public $log_history_1_add    = Log::HISTORY_INSTALL_SOFTWARE;
   static public $log_history_1_delete = Log::HISTORY_UNINSTALL_SOFTWARE;

   static public $log_history_2_add    = Log::HISTORY_INSTALL_SOFTWARE;
   static public $log_history_2_delete = Log::HISTORY_UNINSTALL_SOFTWARE;


   static function getTypeName($nb=0) {
      return _n('Installation', 'Installations', $nb);
   }