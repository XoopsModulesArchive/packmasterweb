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
class logger {
	//================================================================
	function logger() {
		$this->_option = 3;
		$this->_file = "/tmp/pmw.log";
		$this->_head = "logger";
		$this->log("start logger");
	}	//	End Logger Constructor
	//================================================================
	function setLogOption( $option ) {
		$this->_option = $option;
	}	//	End setLogOption
	//================================================================
	function setFile( $file ) {
		$this->_file = $file;
	}	//	End setFile
	//================================================================
	function setHeader( $head ) {
		$this->_head = $head;
	}	//	End setHeader
	//================================================================
	function log( $msg ) {
		//RRB error_log($this->_head . " - " . $msg . "\n", $this->_option, $this->_file);
	}	//	End log
}	//	logger Class
?>
