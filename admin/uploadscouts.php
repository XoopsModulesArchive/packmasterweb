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

require_once '../../../include/cp_header.php';
require_once(XOOPS_ROOT_PATH ."/modules/PackMasterWeb/include/PackMasterWeb_includes.php");

if ( file_exists("../language/".$xoopsConfig['language']."/modinfo.php") ) {
    include_once "../language/".$xoopsConfig['language']."/modinfo.php";
} else {
	include_once "../language/english/modinfo.php";
}
require XOOPS_ROOT_PATH ."/modules/PackMasterWeb/admin/menu.php";

require(XOOPS_ROOT_PATH . "/modules/PackMasterWeb/class/ScoutData.php");

require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/logger.php");

// Get HTTP post/get parameters.
import_request_variables("gp", "param_");

xoops_cp_header();
$p_title = _AM_PMW_CONFIGURE;
print "<h4 style='text-align:left;'>$p_title</h4>";
PackMasterWeb_admin_hmenu();

print "Make logger<br>\n";
print "logger made<br>\n";
//============================================================================
//		My code goes here

print "Uploaded " . $_FILES['file']['name'] . " to " . $_FILES['file']['tmp_name'] . "\n";
$row = 1;
$handle = fopen($_FILES['file']['tmp_name'], "r");
while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) {
   $num = count($data);
   echo "<p> $num fields in line $row: <br /></p>\n";
   $rec['LastName']         = $data[0];
   $rec['FirstName']        = $data[1];
   $rec['NickName']         = $data[4];
   $rec['HomeAddressLine1'] = $data[5];
   $rec['HomeAddressLine2'] = $data[6];
   $rec['HomeCity']         = $data[7];
   $rec['HomeState']        = $data[8];
   $rec['HomeZip']          = $data[9];
   $rec['HomePhone']        = $data[17];
   $rec['Email']            = $data[24];
   $rec['Den']              = $data[36];
   $rec['Parent1FirstName'] = $data[51];
   $rec['Parent1LastName']  = $data[50];
   $rec['Parent1Email']     = $data[61];
   $rec['Parent2LastName']  = $data[69];
   $rec['Parent2FirstName'] = $data[70];
   $rec['Parent2Email']     = $data[80];
   
	$sd = new ScoutData();
	$sd->saveScoutRecord( $rec );
}	//	End while
fclose($handle);


//============================================================================
xoops_cp_footer();
exit();
?>
