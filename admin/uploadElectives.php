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
require_once(XOOPS_ROOT_PATH ."/modules/PackMasterWeb/admin/menu.php");

require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/logger.php");
require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/Electives.php");

// Get HTTP post/get parameters.
import_request_variables("gp", "param_");

xoops_cp_header();
$p_title = _AM_PMW_CONFIGURE;
print "<h4 style='text-align:left;'>$p_title</h4>";
PackMasterWeb_admin_hmenu();


$myLogger = new logger();
$myLogger->setHeader("uploadarrowpoints");
$myLogger->log("Start");

print "Uploaded " . $_FILES['file']['name'] . " to " . $_FILES['file']['tmp_name'] . "\n";
$row = 1;
$myLogger->log("open file");
$handle = fopen($_FILES['file']['tmp_name'], "r");
while (($data = fgetcsv($handle, 1000000, ",")) !== FALSE) {
   $num = count($data);
   echo "<p> $num fields in line $row: <br /></p>\n";

	$LastName = $data[0];
	$FirstName = $data[1];
	$rec['Tiger_Bead_1'] = $data[2];
	$rec['Tiger_Bead_2'] = $data[3];
	$rec['Tiger_Bead_3'] = $data[4];
	$rec['Tiger_Bead_4'] = $data[5];
	$rec['Tiger_Bead_5'] = $data[6];
	$rec['Tiger_Bead_6'] = $data[7];
	$rec['Tiger_Bead_7'] = $data[8];
	$rec['Tiger_Bead_8'] = $data[9];
	$rec['Tiger_Bead_9'] = $data[10];
	$rec['Tiger_Bead_10'] = $data[11];
	$rec['Tiger_Bead_11'] = $data[12];
	$rec['Tiger_Bead_12'] = $data[13];
	
	$rec['Wolf_Points_1'] = $data[15];
	$rec['Wolf_Points_2'] = $data[16];
	$rec['Wolf_Points_3'] = $data[17];
	$rec['Wolf_Points_4'] = $data[18];
	$rec['Wolf_Points_5'] = $data[19];
	$rec['Wolf_Points_6'] = $data[20];
	$rec['Wolf_Points_7'] = $data[21];
	$rec['Wolf_Points_8'] = $data[22];
	$rec['Wolf_Points_9'] = $data[23];
	$rec['Wolf_Points_10'] = $data[24];
	$rec['Wolf_Points_11'] = $data[25];
	$rec['Wolf_Points_12'] = $data[26];

	$rec['Bear_Points_1'] = $data[27];
	$rec['Bear_Points_2'] = $data[28];
	$rec['Bear_Points_3'] = $data[29];
	$rec['Bear_Points_4'] = $data[30];
	$rec['Bear_Points_5'] = $data[31];
	$rec['Bear_Points_6'] = $data[32];
	$rec['Bear_Points_7'] = $data[33];
	$rec['Bear_Points_8'] = $data[34];
	$rec['Bear_Points_9'] = $data[35];
	$rec['Bear_Points_10'] = $data[36];
	$rec['Bear_Points_11'] = $data[37];
	$rec['Bear_Points_12'] = $data[38];

	$rec['Compass_Points_1'] = $data[39];
	$rec['Compass_Points_2'] = $data[40];
	$rec['Compass_Points_3'] = $data[41];
	$rec['Compass_Points_4'] = $data[42];

   	$myLogger->log("FirstName=" . $FirstName);
   	$myLogger->log("LastName=" . $LastName);
	$myLogger->log("new Electives");
	$sd = new Electives();
	$myLogger->log("saveElectiveRecords");
	$sd->saveElectives( $FirstName, $LastName, $rec );
}	//	End while
fclose($handle);
$myLogger->log("Done");

xoops_cp_footer();
exit();
?>
