<?php
// ------------------------------------------------------------------------- 
//	PackMasterWeb
//		Copyright 2004, Rick Broker
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
//  ------------------------------------------------------------------------ //

require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/ScoutData.php");
require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/logger.php");

class AcademicSport {

	//================================================================
	function AcademicSport() {
		$this->_logger = new logger();
		$this->_logger->setHeader("Academic & Sports");
		$this->_logger->log("new AcademicSport");
	}	//	End Advancement Constructor
	
	//================================================================
	function saveRecord($rec) {
		global $xoopsDB;
		
		$this->_logger->log("Start - Save");
		list( $month, $day, $year ) = split( '[/.-]', $rec['award_date'] );
		$rec['award_date'] = "'" . $year . "-" . $month . "-" . $day . "'";

		$SQL = "DELETE FROM " .
				$xoopsDB->prefix("PackMasterWeb_AcademicSports") .
				" WHERE scout_id=" . $rec['scout_id'] . 
				" AND award_name='" . $rec['award_name'] . "'";
		
		$this->_logger->log($SQL);
		$xoopsDB->query($SQL);
		
		$SQL = "INSERT INTO ".
				$xoopsDB->prefix("PackMasterWeb_AcademicSports") . " " .
				"(scout_id, award_date, award_name ) " .
				" VALUES " .
				"( " . $rec['scout_id'] . ", " . $rec['award_date']. ", " . 
				"'" . $rec['award_name'] . "')";
		$this->_logger->log($SQL);
		$xoopsDB->query($SQL);
	}	//	End Save	
	//================================================================
	function getRecord($id) {
		global $xoopsDB;
		
		$SQL = "SELECT * FROM " . 
				$xoopsDB->prefix("PackMasterWeb_AcademicSports") .
				" WHERE scout_id=" . $id;
		
		$this->_logger->log($SQL);
		$results = $xoopsDB->query($SQL);
		
		while( $row = $xoopsDB->fetchArray($results)) {
			$award_name = $row['award_name'];
			$award_date = $row['award_date'];
			$rec[$award_name] = $award_date;
		}	//	End while
		return $rec;
	}	//	End getRecord
}	//	End AcademicSport
?>
