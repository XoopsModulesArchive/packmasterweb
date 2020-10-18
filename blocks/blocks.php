<?php
// ------------------------------------------------------------------------- 
//	PackMasterWeb
//		Copyright 2004, PackMasterWeb
// 		packmasterweb.sourceforge.net
// ------------------------------------------------------------------------- 
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

// Include any constants used for internationalizing templates.
if ( file_exists(XOOPS_ROOT_PATH ."/modules/PackMasterWeb/language/".$xoopsConfig['language']."/templates.php") ) 
    require_once XOOPS_ROOT_PATH ."/modules/PackMasterWeb/language/".$xoopsConfig['language']."/templates.php";
else 
	include_once XOOPS_ROOT_PATH ."/modules/PackMasterWeb/language/english/templates.php";
// Include any common code for this module.
require_once(XOOPS_ROOT_PATH ."/modules/PackMasterWeb/include/PackMasterWeb_includes.php");

function b_PackMasterWeb_do_block()
{
	$sites = array
	(
		"xoops.org" => "http://www.xoops.org",
		"worldware.com" => "http://www.worldware.com",
		"xooperstore.com" => "http://www.xooperstore.com",
	);
	$block = array();
	$link = array();
	foreach ($sites as $site => $url)
	{
		$link['site'] = $site;
		$link['url'] = $url;
		$block['links'][] = $link;
	}
	$block['lang'] = PackMasterWeb_get_intl();
	return $block;
}
?>
