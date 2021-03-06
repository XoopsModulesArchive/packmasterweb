<?php declare(strict_types=1);

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

use XoopsModules\Packmasterweb\{Helper,
    Utility,
    Logger,
    AcademicSport,
    ScoutData
};

/** @var Helper $helper */
/** @var Utility $utility */

require_once __DIR__ . '/admin_header.php';

// require_once XOOPS_ROOT_PATH . '/modules/packmasterweb/admin/menu.php';

// Get HTTP post/get parameters.
Utility::import_request_variables('gp', 'param_');

xoops_cp_header();
$p_title = _AM_PMW_CONFIGURE;
print "<h4 style='text-align:left;'>${p_title}</h4>";
// Utility::horizontalMenuAdmin();

$myLogger = new Logger();
$myLogger->setHeader('uploadAcademicSport');
$myLogger->log('Start');

$ans = new AcademicSport();

print 'Uploaded ' . $_FILES['file']['name'] . ' to ' . $_FILES['file']['tmp_name'] . "\n";
$row = 1;
$myLogger->log('open file');
$handle = fopen($_FILES['file']['tmp_name'], 'rb');
while (false !== ($data = fgetcsv($handle, 1000000, ','))) {
    $num = count($data);
    echo "<p> ${num} fields in line ${row}: <br></p>\n";
    $LastName  = $data[0];
    $FirstName = $data[1];
    $myLogger->log('Get Records for ' . $FirstName . ' ' . $LastName);
    $sd = new ScoutData();
    $id = $sd->getScoutId($FirstName, $LastName);

    $field = 2;
    //while( isset($data[$field]) && isset($data[($field + 1)]) ) {
    while ($field < $num) {
        $record['scout_id']   = $id;
        $record['award_name'] = $data[$field];
        $record['award_date'] = $data[$field + 1];
        $myLogger->log(
            $record['scout_id'] . ' ' . $FirstNAme . ' ' . $LastName . ' ' . $record['award_name'] . ' ' . $record['award_date']
        );

        $ans->saveRecord($record);
        $field += 2;
    }    //	End while
}    //	End while
fclose($handle);
$myLogger->log('Done');

xoops_cp_footer();
exit();
