<?php
/*
 * @version $Id$
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2015 Teclib'.

 http://glpi-project.org

 based on GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2014 by the INDEPNET Development Team.
 
 
 */
 
// ----------------------------------------------------------------------
// Original Author of file: DELMAS Rémi
// Purpose of file: Add a metric type on software license
// ----------------------------------------------------------------------


/** @file
* @brief
*/

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

/// Class SoftwareLicenseMetric
class SoftwareLicenseMetric extends CommonDropdown {


   static function getTypeName($nb=0) {
      return _n('License metric', 'License metric', $nb);
   }
}
?>