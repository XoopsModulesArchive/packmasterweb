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

$moduleDirName      = basename(__DIR__);
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

$modversion['version']             = '1.01';
$modversion['module_status']       = 'Beta 1';
$modversion['release_date']        = '2020/10/17';
$modversion['name']                = _MI_PMW_NAME;
$modversion['description']         = _MI_PMW_DESC;
$modversion['credits']             = 'Rick Broker http://packmasterweb.sf.net/';
$modversion['author']              = 'Rick Broker';
$modversion['help']                = 'docs/PackMasterWeb_admin.html';
$modversion['license']             = 'GNU GPL 2.0 or later';
$modversion['official']            = 0;
$modversion['dirname']             = $moduleDirName;
$modversion['modicons16']          = 'assets/images/icons/16';
$modversion['modicons32']          = 'assets/images/icons/32';
$modversion['image']               = 'assets/images/logoModule.png';
$modversion['module_website_url']  = 'https://xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '7.1';
$modversion['min_xoops']           = '2.5.10';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = [
    'mysql' => '5.5',
];

// SQL file
// This is preprocessed by xoops. The format must be consistent with
// output produced by PHPMYADMIN
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';

// Tables created by sql (without prefix!)
$modversion['tables'][] = 'PackMasterWeb_Scout_Data';
$modversion['tables'][] = 'PackMasterWeb_Rank_Dates';
$modversion['tables'][] = 'PackMasterWeb_AcademicSports';
$modversion['tables'][] = 'PackMasterWeb_Electives';
$modversion['tables'][] = 'PackMasterWeb_TigerElectives';
$modversion['tables'][] = 'PackMasterWeb_WolfElectives';
$modversion['tables'][] = 'PackMasterWeb_BearElectives';
$modversion['tables'][] = 'PackMasterWeb_WebelosElectives';
$modversion['tables'][] = 'PackMasterWeb_config';

// Admin things
$modversion['hasAdmin']    = 1;
$modversion['system_menu'] = 1;
$modversion['adminindex']  = 'admin/index.php';
$modversion['adminmenu']   = 'admin/menu.php';

// Main contents
$modversion['hasMain'] = 1;

// ------------------- Help files ------------------- //
$modversion['help']        = 'page=help';
$modversion['helpsection'] = [
    [
        'name' => _MI_PMW_OVERVIEW,
        'link' => 'page=help',
    ],
    [
        'name' => _MI_PMW_ADMIN,
        'link' => 'page=admin',
    ],
    [
        'name' => _MI_PMW_DISCLAIMER,
        'link' => 'page=disclaimer',
    ],
    [
        'name' => _MI_PMW_LICENSE,
        'link' => 'page=license',
    ],
    [
        'name' => _MI_PMW_SUPPORT,
        'link' => 'page=support',
    ],
];

// Templates
$modversion['templates'] = [
    [
        'file'        => 'PackMasterWeb_index.tpl',
        'description' => 'PackMasterWeb Template Page',
    ],
    [
        'file'        => 'PackMasterWeb_ScoutData.tpl',
        'description' => 'PackMasterWeb Scout Data Page',
    ],
    [
        'file'        => 'PackMasterWeb_Tiger.tpl',
        'description' => 'PackMasterWeb Tiger Advancement Page',
    ],
    [
        'file'        => 'PackMasterWeb_Bobcat.tpl',
        'description' => 'PackMasterWeb Bobcat Advancement Page',
    ],
    [
        'file'        => 'PackMasterWeb_Wolf.tpl',
        'description' => 'PackMasterWeb Wolf Advancement Page',
    ],
    [
        'file'        => 'PackMasterWeb_Bear.tpl',
        'description' => 'PackMasterWeb Bear Advancement Page',
    ],
    [
        'file'        => 'PackMasterWeb_Webelos.tpl',
        'description' => 'PackMasterWeb Webelos Advancement Page',
    ],
    [
        'file'        => 'PackMasterWeb_ArrowOfLight.tpl',
        'description' => 'PackMasterWeb Arrow Of Light Advancement Page',
    ],
    [
        'file'        => 'PackMasterWeb_AcademicSport.tpl',
        'description' => 'PackMasterWeb Academic and Sport Page',
    ],
];

// Blocks (Start indexes with 1, not 0!)
// This is a simple block that just displays a fixed list.

$modversion['blocks'][] = [
    'file'        => 'blocks.php',
    'name'        => _MI_PMW_BLOCK_ONE_TITLE,
    'description' => _MI_PMW_BLOCK_ONE_DESC,
    'show_func'   => 'b_packmasterweb_do_block',
    'template'    => 'packmasterweb_block_1.tpl',
    'options'     => 1 | 2,
];

// This block displays a selection from the database, controlled by the configuration, which is set in
// module admin administration for PackMasterWeb

$modversion['blocks'][] = [
    'file'        => 'blocks_db.php',
    'name'        => _MI_PMW_BLOCK_TWO_TITLE,
    'description' => _MI_PMW_BLOCK_TWO_DESC,
    'show_func'   => 'b_packmasterweb_do_db_block',
    'template'    => 'packmasterweb_block_2.tpl',
    'options'     => 1 | 2,
];
