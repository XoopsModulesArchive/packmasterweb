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
require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/logger.php");
 
class ScoutData {
	//================================================================
	function ScoutData() {
		$this->_logger = new logger();
		$this->_logger->setLogOption(3);
		$this->_logger->setHeader("ScoutData");
		$this->_logger->log("ScoutData->create object");
	}	//	End ScoutData
	
	//================================================================
	function checkOnScout( $FirstName, $LastName ) {
		$this->_logger->setHeader("ScoutData->checkOnScout");
		$this->_logger->log("start");
		$result = $this->getScoutId( $FirstName, $LastName );
		$this->_logger->setHeader("ScoutData->checkOnScout");
	    	$this->_logger->log("ID=" . $result);
	    if( $result > -1 ) {
	    	$this->_logger->log("TRUE");
	    	return TRUE;
	    } else {
	    	$this->_logger->log("FALSE");
	    	return FALSE;
	    }	//	End if
	}	//	End checkOnScout 	
 	//================================================================
 	function saveScoutRecord( $record ) {
 		error_log("saveScoutRecord\n", 3, "/tmp/pmw.log");
 		$this->_logger->setHeader("ScoutData->saveScoutRecord");
 		$this->_logger->log("start");
 		if( $this->checkOnScout( $record['FirstName'], $record['LastName'] ) ) {
 			$this->_logger->setHeader("ScoutData->saveScoutRecord");
 			$this->_logger->log("do update");
 			$this->updateScoutRecord( $record );
 		} else {
 			$this->_logger->setHeader("ScoutData->saveScoutRecord");
 			$this->_logger->log("do insert");
 			$this->insertScoutRecord( $record );
 		}	//	End if
 		$this->_logger->setHeader("ScoutData->saveScoutRecord");
 		$this->_logger->log("end");
 	}	//	End saveScoutRecord
 	//================================================================
 	function updateScoutRecord( $record ) {
 		global $xoopsDB;
 		$this->_logger->setHeader("ScoutData->updateScoutRecord");
 		$SQL = "UPDATE " .
 				$xoopsDB->prefix("PackMasterWeb_Scout_Data") . 
			   " SET ";
 		$pass = 0;		
		while (list($key, $value) = each($record)) {
			if( $pass > 0 ) { $SQL = $SQL . ","; }
			$SQL = $SQL . $key . "='" . $value . "'";
			$pass = $pass + 1;
		}	//	End while
		$this->id = $this->getScoutId($record['FirstName'], $record['LastName']);
		$SQL = $SQL . " WHERE identifier=" . $this->id; 
 		$this->_logger->setHeader("ScoutData->updateScoutRecord");
		$this->_logger->log($SQL);
		$xoopsDB->query($SQL);
 	}	//	End updateScoutRecord
 	//================================================================
 	function insertScoutRecord( $record ) {
 		global $xoopsDB;
 		$this->_logger->setHeader("ScoutData->insertScoutRecord");
 		$SQL = "INSERT INTO " . 
 				$xoopsDB->prefix("PackMasterWeb_Scout_Data") . " ";
 		$pass = 0;
		while ( list($key, $value) = each($record) ) {
			$this->_logger->log("insert " . $key . "=" . $value);
			if( $pass > 0 ) {
				$FieldList = $FieldList . ",";
				$ValueList = $ValueList . ",";
			}	//	End if
			$FieldList = $FieldList . $key;
			$ValueList = $ValueList . "'" . $value . "'";
			$pass = $pass + 1;
		}	//	End while
		$SQL = $SQL . " (" . $FieldList . ") VALUES (" . $ValueList . ")";
		$this->_logger->log($SQL);
		$xoopsDB->query($SQL);
 	}	//	End insertScoutRecord
 	//================================================================
 	function getScoutById( $id ) {
 		global $xoopsDB;
 		$SQL = "SELECT * FROM " .
 				$xoopsDB->prefix("PackMasterWeb_Scout_Data") . " " .
 				"WHERE identifier=" . $id;
 		$result = $xoopsDB->query($SQL);
 		return $xoopsDB->fetchRow($result);
 	}	//	End getScoutById
 	//================================================================
 	function getScoutId( $FirstName, $LastName ) {
 		global $xoopsDB;
 		$this->_logger->setHeader("ScoutData->getScoutId");
 		$this->_logger->log($FirstName . "," . $LastName);
		$SQL = "SELECT identifier FROM " .
			   $xoopsDB->prefix("PackMasterWeb_Scout_Data") . " " .
			   "WHERE FirstName='" . $FirstName . "' " .
			   "AND LastName='" . $LastName . "' ";
			   
		$this->_logger->log("ScoutData->getScoutId " . $SQL);
		$result = $xoopsDB->query($SQL);
		if (!$result) {
			$error = "Error " . $result;
			$this->_logger->log($error);
			return 0;
		}	//	End if
		$this->id = $xoopsDB->fetchArray($result);
		$this->id = $this->id['identifier'];
		$this->_logger->log("ID=" . $this->id);
		return $this->id;
 	}	//	End getScoutId
 	//================================================================
 	function getScoutIdByEMail( $email ) {
 		global $xoopsDB;
 		$this->_logger->setHeader("ScoutData->getScoutIdByMail");
 		$SQL = "SELECT identifier FROM " .
 				$xoopsDB->prefix("PackMasterWeb_Scout_Data") .
 			   " WHERE Email='" . $email . "' " .
 			   " OR Parent1Email='" . $email . "' " .
 			   " OR Parent2Email='" . $email . "' ";

		$this->_logger->log($SQL); 			   
 		$result = $xoopsDB->query($SQL);
		if (!$result) {
			$this->_logger->log($result->error());
			return NULL;
		}	//	End IF
		$result = $xoopsDB->fetchArray($result);
		$this->id = $result['identifier'];
		return $this->id;
 	}	//	End getScoutIdByEMail
 	//================================================================
 	function getScoutList() {
 		global $xoopsDB;

 		$this->_logger->setHeader("ScoutData->getScoutList");

 		$SQL = "SELECT identifier, FirstName, LastName FROM " .
 				$xoopsDB->prefix("PackMasterWeb_Scout_Data");

 		$this->_logger->log($SQL);
 		$this->result = $xoopsDB->query($SQL);
		$rowIndex = 1;
		while( $values = $xoopsDB->fetchArray($this->result) ) {
			$myList[$rowIndex] = $values;
			$rowIndex = $rowIndex + 1;
		}	//	End While

 		return $myList;
 	}	//	End getScoutList
 	//================================================================
 	function getScoutData( $id ) {
 		global $xoopsDB;
 		$this->_logger->setHeader("ScoutData->getScoutData");
 		$SQL = "SELECT * FROM " .
 				$xoopsDB->prefix("PackMasterWeb_Scout_Data") . " " .
 			   "WHERE identifier=" . $id;
 			   
 		$this->_logger->log($SQL);
 		$result = $xoopsDB->query($SQL);
		$result = $xoopsDB->fetchArray($result);
		if (! $result) {
			$this->_logger->log( $xoopsDB->error() );
			return NULL;
		}	//	End if
		return $result;
 	}	//	End getScoutData
}	//	End ScoutData Class
?>
