<?php declare(strict_types=1);

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

use XoopsModules\Packmasterweb\{Helper,
    Utility
};

/** @var Helper $helper */
/** @var Utility $utility */
require_once __DIR__ . '/admin_header.php';

// require_once XOOPS_ROOT_PATH . '/modules/packmasterweb/admin/menu.php';

// Get HTTP post/get parameters.
Utility::import_request_variables('gp', 'param_');

xoops_cp_header();

$editmenu[0]['title'] = _MI_PMW_EDIT_UPLOAD_SD;
$editmenu[0]['link']  = 'admin/uploadscouts.php';
$editmenu[1]['title'] = _MI_PMW_EDIT_DOWNLOAD_SD;
$editmenu[1]['link']  = 'admin/downloadscouts.php';
$editmenu[2]['title'] = _MI_PMW_EDIT_UPLOAD_AD;
$editmenu[2]['link']  = 'admin/uploadadvancement.php';
$editmenu[3]['title'] = _MI_PMW_EDIT_DOWNLOAD_AD;
$editmenu[3]['link']  = 'admin/downloadadvancement.php';

print "<ol>\n";
foreach ($editmenu as $menu_item) {
    print "<li><a href='";
    print $menu_item['link'];
    print "'>" . $menu_item['title'] . "</a></li>\n";
} //	End foreach
print "</ol>\n";

xoops_cp_footer();
exit();
