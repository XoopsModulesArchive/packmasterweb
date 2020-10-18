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

use Xmf\Module\Admin;
use XoopsModules\Packmasterweb\{Helper
};

/** @var Admin $adminObject */
/** @var Helper $helper */

include dirname(__DIR__) . '/preloads/autoloader.php';

$moduleDirName      = basename(dirname(__DIR__));
$moduleDirNameUpper = mb_strtoupper($moduleDirName);
$helper             = Helper::getInstance();
$helper->loadLanguage('common');
$helper->loadLanguage('feedback');

$pathIcon32 = Admin::menuIconPath('');
if (is_object($helper->getModule())) {
    //    $pathModIcon32 = $helper->getModule()->getInfo('modicons32');
    $pathModIcon32 = $helper->url($helper->getModule()->getInfo('modicons32'));
}

$adminmenu[] = [
    'title' => _MI_PMW_MENU_HOME,
    'desc'  => _MI_PMW_MENU_MAIN_DESC,
    'link'  => 'admin/index.php',
    'icon'  => $pathIcon32 . '/home.png',
];

$adminmenu[] = [
    'title' => _MI_PMW_MENU_MAIN,
    'desc'  => _MI_PMW_MENU_CONFIG_DESC,
    'link'  => 'admin/main.php',
    'icon'  => $pathIcon32 . '/manage.png',
];

$adminmenu[] = [
    'title' => _MI_PMW_MENU_CONFIG,
    'desc'  => _MI_PMW_MENU_CONFIG_DESC,
    'link'  => 'admin/config.php',
    'icon'  => $pathIcon32 . '/administration.png',
];

$adminmenu[] = [
    'title' => _MI_PMW_MENU_EDIT,
    'desc'  => _MI_PMW_MENU_EDIT_DESC,
    'link'  => 'admin/edit.php',
    'icon'  => $pathIcon32 . '/type.png',
];

$adminmenu[] = [
    'title' => _MI_PMW_MENU_UPLOAD,
    'desc'  => _MI_PMW_MENU_UPLOAD_DESC,
    'link'  => 'admin/upload.php',
    'icon'  => $pathIcon32 . '/upload.png',
];

//$adminmenu[] = [
//    'title'  => _MI_PMW_MENU_HELP,
//    'desc'   => _MI_PMW_MENU_HELP_DESC,
//    'link'   => 'docs/PackMasterWeb_admin.html',
//    'icon'   => $pathIcon32 . '/help.png',
//    'target' => '_blank',
//];

// Blocks Admin
$adminmenu[] = [
    'title' => constant('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS'),
    'link'  => 'admin/blocksadmin.php',
    'icon'  => $pathIcon32 . '/block.png',
];

if (is_object($helper->getModule()) && $helper->getConfig('displayDeveloperTools')) {
    $adminmenu[] = [
        'title' => constant('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_MIGRATE'),
        'link'  => 'admin/migrate.php',
        'icon'  => $pathIcon32 . '/database_go.png',
    ];
}

$adminmenu[] = [
    'title' => _MI_PMW_MENU_ABOUT,
    'link'  => 'admin/about.php',
    'icon'  => $pathIcon32 . '/about.png',
];

//$adminmenu[0]['title'] = _MI_PMW_MENU_MAIN;
//$adminmenu[0]['link']  = 'admin/index.php';
//$adminmenu[0]['desc']  = _MI_PMW_MENU_MAIN_DESC;
//
//$adminmenu[1]['title'] = _MI_PMW_MENU_CONFIG;
//$adminmenu[1]['link']  = 'admin/config.php';
//$adminmenu[1]['desc']  = _MI_PMW_MENU_CONFIG_DESC;
//
//$adminmenu[2]['title'] = _MI_PMW_MENU_EDIT;
//$adminmenu[2]['link']  = 'admin/edit.php';
//$adminmenu[2]['desc']  = _MI_PMW_MENU_EDIT_DESC;
//
//$adminmenu[3]['title'] = _MI_PMW_MENU_UPLOAD;
//$adminmenu[3]['link']  = 'admin/upload.php';
//$adminmenu[3]['desc']  = _MI_PMW_MENU_UPLOAD_DESC;
//
//$adminmenu[4]['title']  = _MI_PMW_MENU_HELP;
//$adminmenu[4]['link']   = 'docs/PackMasterWeb_admin.html';
//$adminmenu[4]['desc']   = _MI_PMW_MENU_HELP_DESC;
//$adminmenu[4]['target'] = '_blank';
