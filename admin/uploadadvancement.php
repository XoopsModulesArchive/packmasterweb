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
require_once( XOOPS_ROOT_PATH ."/modules/PackMasterWeb/class/Advancement.php");

// Get HTTP post/get parameters.
import_request_variables("gp", "param_");

xoops_cp_header();
$p_title = _AM_PMW_CONFIGURE;
print "<h4 style='text-align:left;'>$p_title</h4>";
PackMasterWeb_admin_hmenu();


$myLogger = new logger();
$myLogger->setHeader("uploadadvancement");
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
	$rec['Tiger_Totem_1'] = $data[2];
	$rec['Tiger_Totem_2'] = $data[3];
	$rec['Tiger_Totem_3'] = $data[4];
	$rec['Tiger_Totem_4'] = $data[5];
	
	$rec['Tiger_Achievement_1'] = $data[6];
	$rec['Tiger_Achievement_2'] = $data[7];
	$rec['Tiger_Achievement_3'] = $data[8];
	$rec['Tiger_Achievement_4'] = $data[9];
	$rec['Tiger_Achievement_5'] = $data[10];
	$rec['Tiger_Achievement_6'] = $data[11];
	$rec['Tiger_Achievement_7'] = $data[12];
	$rec['Tiger_Achievement_8'] = $data[13];
	$rec['Tiger_Achievement_9'] = $data[14];
	$rec['Tiger_Achievement_10'] = $data[15];
	$rec['Tiger_Achievement_11'] = $data[16];
	$rec['Tiger_Achievement_12'] = $data[17];
	$rec['Tiger_Achievement_13'] = $data[18];
	$rec['Tiger_Achievement_14'] = $data[19];
	$rec['Tiger_Achievement_15'] = $data[20];
	$rec['Tiger_Achievement_16'] = $data[21];
	$rec['Tiger_Achievement_17'] = $data[22];

	$rec['Bobcat_Acheivement_1'] = $data[23];
	$rec['Bobcat_Acheivement_2'] = $data[24];
	$rec['Bobcat_Acheivement_3'] = $data[25];
	$rec['Bobcat_Acheivement_4'] = $data[26];
	$rec['Bobcat_Acheivement_5'] = $data[27];
	$rec['Bobcat_Acheivement_6'] = $data[28];
	$rec['Bobcat_Acheivement_7'] = $data[29];
	$rec['Bobcat_Acheivement_8'] = $data[30];
	$rec['Bobcat_Acheivement_9'] = $data[31];

	$rec['Wolf_Acheivement_1'] = $data[32];
	$rec['Wolf_Acheivement_2'] = $data[33];
	$rec['Wolf_Acheivement_3'] = $data[34];
	$rec['Wolf_Acheivement_4'] = $data[35];
	$rec['Wolf_Acheivement_5'] = $data[36];
	$rec['Wolf_Acheivement_6'] = $data[37];
	$rec['Wolf_Acheivement_7'] = $data[38];
	$rec['Wolf_Acheivement_8'] = $data[39];
	$rec['Wolf_Acheivement_9'] = $data[40];
	$rec['Wolf_Acheivement_10'] = $data[41];
	$rec['Wolf_Acheivement_12'] = $data[42];
	$rec['Wolf_Acheivement_13'] = $data[43];
	#$rec['Wolf_Acheivement_14'] = $data[44];

	$rec['Bear_Acheivement_1'] = $data[45];
	$rec['Bear_Acheivement_2'] = $data[46];
	$rec['Bear_Acheivement_3'] = $data[47];
	$rec['Bear_Acheivement_4'] = $data[48];
	$rec['Bear_Acheivement_5'] = $data[49];
	$rec['Bear_Acheivement_6'] = $data[50];
	$rec['Bear_Acheivement_7'] = $data[51];
	$rec['Bear_Acheivement_8'] = $data[52];
	$rec['Bear_Acheivement_9'] = $data[53];
	$rec['Bear_Acheivement_10'] = $data[54];
	$rec['Bear_Acheivement_11'] = $data[55];
	$rec['Bear_Acheivement_12'] = $data[56];
	$rec['Bear_Acheivement_13'] = $data[57];
	$rec['Bear_Acheivement_14'] = $data[58];
	$rec['Bear_Acheivement_15'] = $data[59];
	$rec['Bear_Acheivement_16'] = $data[60];
	$rec['Bear_Acheivement_17'] = $data[61];
	$rec['Bear_Acheivement_18'] = $data[62];
	$rec['Bear_Acheivement_19'] = $data[63];
	$rec['Bear_Acheivement_20'] = $data[64];
	$rec['Bear_Acheivement_21'] = $data[65];
	$rec['Bear_Acheivement_22'] = $data[66];
	$rec['Bear_Acheivement_23'] = $data[67];
	$rec['Bear_Acheivement_24'] = $data[68];
	$rec['Bear_Acheivement_25'] = $data[69];

	$rec['Webelos_Acheivement_1'] = $data[70];
	$rec['Webelos_Acheivement_2'] = $data[71];
	$rec['Webelos_Acheivement_3'] = $data[72];
	$rec['Webelos_Acheivement_4'] = $data[73];
	$rec['Webelos_Acheivement_5'] = $data[74];
	$rec['Webelos_Acheivement_6'] = $data[75];
	$rec['Webelos_Acheivement_7'] = $data[76];
	$rec['Webelos_Acheivement_8'] = $data[77];
	$rec['Webelos_Acheivement_9'] = $data[78];

	$rec['ArrowOfLight_1'] = $data[79];
	$rec['ArrowOfLight_2'] = $data[80];
	$rec['ArrowOfLight_3'] = $data[81];
	$rec['ArrowOfLight_4'] = $data[82];
	$rec['ArrowOfLight_5'] = $data[83];
	$rec['ArrowOfLight_6'] = $data[84];
	$rec['ArrowOfLight_7'] = $data[85];
	$rec['ArrowOfLight_8'] = $data[86];
	$rec['ArrowOfLight_9'] = $data[87];
	$rec['ArrowOfLight_10'] = $data[88];
	$rec['ArrowOfLight_11'] = $data[89];
	$rec['ArrowOfLight_12'] = $data[90];

   	$myLogger->log("FirstName=" . $FirstName);
   	$myLogger->log("LastName=" . $LastName);
	$myLogger->log("new Advancement");
	$sd = new Advancement();
	$myLogger->log("uploadscouts saveScoutRecord");
	$sd->saveAdvancement( $FirstName, $LastName, $rec );
}	//	End while
fclose($handle);
$myLogger->log("Done");

xoops_cp_footer();
exit();
?>
