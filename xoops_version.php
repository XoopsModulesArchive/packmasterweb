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
$modversion['name'] = _MI_PMW_NAME;
$modversion['version'] = 0.20;
$modversion['description'] = _MI_PMW_DESC;
$modversion['credits'] = "Rick Broker http://packmasterweb.sf.net/";
$modversion['author'] = "Rick Broker";
$modversion['help'] = "docs/PackMasterWeb_admin.html";
$modversion['license'] = "GPL";
$modversion['official'] = 0;
$modversion['image'] = "images/PackMasterWeb.png";
$modversion['dirname'] = "PackMasterWeb";

// SQL file 
// This is preprocessed by xoops. The format must be constistant with
// output produced by PHPMYADMIN
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql (without prefix!)
$modversion['tables'][] = "PackMasterWeb_Scout_Data";
$modversion['tables'][] = "PackMasterWeb_Rank_Dates";
$modversion['tables'][] = "PackMasterWeb_AcademicSports";
$modversion['tables'][] = "PackMasterWeb_Electives";
$modversion['tables'][] = "PackMasterWeb_TigerElectives";
$modversion['tables'][] = "PackMasterWeb_WolfElectives";
$modversion['tables'][] = "PackMasterWeb_BearElectives";
$modversion['tables'][] = "PackMasterWeb_WebelosElectives";
$modversion['tables'][] = "PackMasterWeb_config";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Main contents
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][0]['file'] = 'PackMasterWeb_index.html';
$modversion['templates'][0]['description'] = 'PackMasterWeb Template Page';
$modversion['templates'][1]['file'] = 'PackMasterWeb_ScoutData.html';
$modversion['templates'][1]['description'] = 'PackMasterWeb Scout Data Page';
$modversion['templates'][2]['file'] = 'PackMasterWeb_Tiger.html';
$modversion['templates'][2]['description'] = 'PackMasterWeb Tiger Advancement Page';
$modversion['templates'][3]['file'] = 'PackMasterWeb_Bobcat.html';
$modversion['templates'][3]['description'] = 'PackMasterWeb Bobcat Advancement Page';
$modversion['templates'][4]['file'] = 'PackMasterWeb_Wolf.html';
$modversion['templates'][4]['description'] = 'PackMasterWeb Wolf Advancement Page';
$modversion['templates'][5]['file'] = 'PackMasterWeb_Bear.html';
$modversion['templates'][5]['description'] = 'PackMasterWeb Bear Advancement Page';
$modversion['templates'][6]['file'] = 'PackMasterWeb_Webelos.html';
$modversion['templates'][6]['description'] = 'PackMasterWeb Webelos Advancement Page';
$modversion['templates'][7]['file'] = 'PackMasterWeb_ArrowOfLight.html';
$modversion['templates'][7]['description'] = 'PackMasterWeb Arrow Of Light Advancement Page';
$modversion['templates'][8]['file'] = 'PackMasterWeb_AcademicSport.html';
$modversion['templates'][8]['description'] = 'PackMasterWeb Academic and Sport Page';

// Blocks (Start indexes with 1, not 0!)
// This is a simple block that just displays a fixed list.
$modversion['blocks'][1]['file'] = "blocks.php";
$modversion['blocks'][1]['name'] = _MI_PMW_BLOCK_ONE_TITLE;
$modversion['blocks'][1]['description'] = _MI_PMW_BLOCK_ONE_DESC;
$modversion['blocks'][1]['show_func'] = "b_PackMasterWeb_do_block";
$modversion['blocks'][1]['template'] = 'PackMasterWeb_block_one.html';
$modversion['blocks'][1]['options']	= 1 | "two";

// This block displays a selection from the database, controlled by the configuration, which is set in 
// module admin administration for PackMasterWeb
$modversion['blocks'][2]['file'] = "blocks_db.php";
$modversion['blocks'][2]['name'] = _MI_PMW_BLOCK_TWO_TITLE;
$modversion['blocks'][2]['description'] = _MI_PMW_BLOCK_TWO_DESC;
$modversion['blocks'][2]['show_func'] = "b_PackMasterWeb_do_db_block";
$modversion['blocks'][2]['template'] = 'PackMasterWeb_block_two.html';
$modversion['blocks'][2]['options']	= 1 | "two";
