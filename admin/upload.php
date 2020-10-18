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

// Get HTTP post/get parameters.
import_request_variables("gp", "param_");

xoops_cp_header();
$p_title = _AM_PMW_CONFIGURE;
print "<h4 style='text-align:left;'>$p_title</h4>";
PackMasterWeb_admin_hmenu();


error_log("edit->init \n", 3, "/tmp/pmw.log");

$editmenu[0]['title'] = _MI_PMW_UPLOAD_UPLOAD_SD;
$editmenu[0]['link']  = "uploadscouts.php";

$editmenu[1]['title'] = _MI_PMW_UPLOAD_UPLOAD_AD;
$editmenu[1]['link']  = "uploadadvancement.php";

$editmenu[2]['title'] = _MI_PMW_UPLOAD_UPLOAD_ANS;
$editmenu[2]['link']  = "uploadAcademicSport.php";

$editmenu[3]['title'] = _MI_PMW_UPLOAD_UPLOAD_ELECTIVES;
$editmenu[3]['link']  = "uploadElectives.php";

//$editmenu[2]['title'] = _MI_PMW_EDIT_DOWNLOAD_SD;
//$editmenu[2]['link']  = "admin/downloadscouts.php";

//$editmenu[3]['title'] = _MI_PMW_EDIT_DOWNLOAD_AD;
//$editmenu[3]['link']  = "admin/downloadadvancement.php";

print "<ol>\n";
foreach( $editmenu as $menu_item ) {
	?>
	<li><form action="<?PHP print $menu_item['link'] ?>" 
				 method="post" 
				 enctype="multipart/form-data">
		<table>
			<tr><th colspan='2'><?PHP print $menu_item['title']; ?></th></tr>
			<tr>
				<td>File:</td>
				<td><input type="file" name="file" size="30"></td>
			</tr>
			<tr>
				<td colspan='2'><input type='submit' value='Upload!'></td>
			</tr>
		 </table>
		 </form></li>
<?PHP
}	//	End foreach 
print "</ol>\n";

xoops_cp_footer();
exit();
?>
