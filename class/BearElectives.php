<?php
// ------------------------------------------------------------------------- 
//	PackMasterWeb
//		Copyright 2004, PackMasterWeb
// 		packmasterweb.sourceforge.net
// ------------------------------------------------------------------------- 
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/ScoutData.php");
require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/Electives.php");
require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/logger.php");

if ( file_exists( XOOPS_ROOT_PATH . "/modules/PackMasterWeb/language/".$xoopsConfig['language']."/BadgeInfo.php") ) {
    include_once  XOOPS_ROOT_PATH . "/modules/PackMasterWeb/language/".$xoopsConfig['language']."/BadgeInfo.php";
} else {
	include_once  XOOPS_ROOT_PATH . "/modules/PackMasterWeb/language/english/BadgeInfo.php";
}

class BearElectives {
	
	//================================================================
	function BearElectives() {
		$this->_logger = new logger();
		$this->_logger->setLogOption(3);
		$this->_logger->setHeader("BearElectives");
		$this->_logger->log("new BearElectives");
		$this->BearPoints = new Electives();
	}	//	End Electives Constructor
	
	//================================================================
	function getElectiveNames() {
		global $bear_electives;
		
		return $bear_electives;
	}	//	getElectiveNames
	
	//================================================================
	function getCompletedElectives( $id ) {
		global $xoopsDB;
		$this->_logger->setHeader("BearElectives->getCompletedElectivesById");
		$SQL = "SELECT * FROM " .
				$xoopsDB->prefix("PackMasterWeb_BearElectives") . 
			   " " .
			   "WHERE scout_id=" . $id;
		$this->_logger->log($SQL);
 		$result = $xoopsDB->query($SQL);
 		$result = $xoopsDB->fetchArray($result);
 		foreach( $result as $key=>$item ) {
 			$arrowPoints[$key] = $item;
 		}	//	End foreach
		$this->_logger->setHeader("BearElectives");
 		return $arrowPoints;
	}	//	End getCompletedElectives
	
	//================================================================
	function getEarnedDates( $id ) {
		$this->_logger->setHeader("BearElectives->getCompletedElectivesById");
		return $this->BearPoints->getElectivesById( $id );
	}	//	End getEarnedDates
}	//	BearElectives
?>
