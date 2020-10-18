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

// Writes out the form to get all config parameters.
function PackMasterWeb_config_form(): void
{
    $config_fields = Utility::getConfigFields();
    $values        = Utility::getConfig();
    print "
    <form action='config.php' method='POST' enctype='application/x-www-form-urlencoded'>\n
    <table border='1' cellpadding='0' cellspacing='0' width='100%'>\n
        <tr><th>" . _AM_PMW_CTITLE . "</th></tr>\n
        <tr>\n
        <td class='bg2'>\n
            <table width='100%' border='0' cellpadding='4' cellspacing='1'>\n";

    foreach ($config_fields as $field => $prompt) {
        if ('config_id' === $field) {
            continue;
        }
        $pname = 'param_' . $field;
        print "
                <tr nowrap='nowrap'>\n
                <td class ='head'>" . $prompt . "</td>\n
                <td class='even' valign = 'top'>\n
                    <input type='text' name='${field}' size='32' maxlength='32' value ='" . $values[$field] . "'>\n
                </td></tr>\n
                </tr>\n";
    }
    print "                
                <td class='head'>&nbsp;</td>\n
                <td class='even'>\n
                    <input type='hidden' name='op' value='config'>\n
                    <input type='hidden' name='window' value='config'>\n
                    <input type='submit' value='" . _AM_PMW_BUT_GO . "'>\n
                </td></tr>\n
            </table>\n
        </td></tr>\n
    </table>\n
    </form>\n";
}

// Displays the main admin interface
function PackMasterWeb_config_main(): void
{
    xoops_cp_header();
    $p_title = _AM_PMW_CONFIGURE;
    print "<h4 style='text-align:left;'>${p_title}</h4>";
    Utility::horizontalMenuAdmin();
    PackMasterWeb_config_form();
    xoops_cp_footer();
    exit();
}

// Processes the configuration update request, by
// getting the HTTP parameters, and putting them into the database.
function PackMasterWeb_config_post(): void
{
    global $xoopsDB;
    $config_fields = Utility::getConfigFields();
    foreach ($config_fields as $field => $prompt) {
        $param = 'param_' . $field;
        global ${$param};
    }
    $param_config_id = 1;
    $sql             = 'REPLACE INTO ' . $xoopsDB->prefix('PackMasterWeb_config') . ' (' . Utility::toString($config_fields) . ') VALUES (';

    $first = true;
    foreach ($config_fields as $field => $prompt) {
        $param = 'param_' . $field;
        if (!$first) {
            $sql .= ', ';
        }
        // Handle a 'feature' of PHP that adds backslashes to HTTP parameters.
        $param_value = get_magic_quotes_gpc() ? stripslashes(${$param}) : ${$param};
        $sql         .= "'" . $GLOBALS['xoopsDB']->escape($param_value) . "'";
        $first       = false;
    }
    $sql .= ' )';
    if (!$xoopsDB->query($sql)) {
        $error = $xoopsDB->error();
        xoops_cp_header();
        Utility::showSqlError(_AM_PMW_ERROR_ADD_FAILED, $error, $sql);
        xoops_cp_footer();
    } else {
        redirect_header('config.php', 1, _AM_PMW_OK_DB);
    }
    exit();
}

if (!isset($param_op)) {
    $param_op = 'main';
}

switch ($param_op) {
    case 'main':
        PackMasterWeb_config_main();
        break;
    case 'config':
        PackMasterWeb_config_post();
        break;
    default:
        xoops_cp_header();
        print "<h1>Unknown method requested '${param_op}'</h1>";
        xoops_cp_footer();
}
