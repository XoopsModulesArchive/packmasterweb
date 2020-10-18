<?php
// ------------------------------------------------------------------------- //
// Copyright 2004, Rick Broker,                                              //
// packmasterweb.sourceforge.net						                     //
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

// Get the definitions for the strings used in the user interface.
if ( file_exists(XOOPS_ROOT_PATH ."/modules/PackMasterWeb/language/english/admin.php") ) 
	require_once XOOPS_ROOT_PATH ."/modules/PackMasterWeb/language/english/admin.php";
else 
	include_once XOOPS_ROOT_PATH ."/modules/PackMasterWeb/language/english/admin.php";


//
// Formats an array as a comma delimited string
//
function PackMasterWeb_to_string($assoc_array)
{
	$str = "";
	foreach($assoc_array as $key => $value)
	{
		if (strlen($str) != 0)
			$str .= ", ";
		$str .= $key;
	}
	return $str;
}

//
// Shows the error message and query for a failed database access
//
function PackMasterWeb_show_sql_error($title, $error, $sql)
{
		print 
		"<table>\n"
		. "<TR><TH colspan = '2'>$title</TH></TR>\n"
		. "<TR><TD class='head' valign = 'top'>". _AM_PMW_ERR_ERROR . "</TD><TD class='even'>$error</TD></TR>\n"
		. "<TR><TD class='head' valign = 'top'>". _AM_PMW_ERR_QUERY . "</TD><TD class='even'>$sql</TD></TR>\n"
		. "</table>\n";
}


//
// Formats and returns a horizontal menu
//
function PackMasterWeb_hmenu($menu_def)
{
    $str = "<P>";
    $first = true;
    foreach($menu_def as $menu_title => $menu_link)
	{
	    if ($first) $first = false; else $str .= "| ";
		$str .= "<a href='" . $menu_link . "'>" . $menu_title . "</a> ";
	}
    $str .= "</p>";
    return $str;
}

//
// Displays the horizontal menu for PackMasterWeb administration
//
function PackMasterWeb_admin_hmenu()
{
	// ZZZFix this. Clean up menu sharing.
	global $adminmenu;
    print "<table><tr>";
    $first = true;
    foreach($adminmenu as $menu_item)
	{
	    print "<td>\n";
	    $link = $menu_item['link'];
		$link = "../" . $link;
	    if ($first) $first = false; else print "| ";
		print "<a href='" . $link . "'";
		if (isset($menu_item['target']))
			print " target='" . $menu_item['target'] . "'";
		print ">" . $menu_item['title'] . "</a>";
	    print "</td>\n";
	}
    print "</tr></table><BR>";
}

//
// Loads the strings used for internationalizing the templates into the current template
//
function PackMasterWeb_add_intl()
{
	global $xoopsTpl;
	$intl = PackMasterWeb_get_intl();
	$xoopsTpl->assign("lang", $intl);
}

//
// Returns an associative array, with the constants used for internationalizing the templates
// This allows a module to run in multiple languages at a time (each user can choose a language)
//
function PackMasterWeb_get_intl()
{
	$intl = array
	(
		"block_title" =>_AM_PMW_LANG_BLOCK_TITLE,
		"error" =>_AM_PMW_LANG_ERROR,
		"sample" =>_AM_PMW_LANG_SAMPLE,
		"welcome" =>_AM_PMW_LANG_WELCOME,
	);
	return $intl;
}

//
// Gets the configuration that is currently stored in the database.
// $param is the name of the field we want to retrieve
// $config is the configuration record from the database.
//			If you are querying multiple values, you can reuse the config object
//			instead of querying the database for each field.
//	$default_value The default value for the parameter
//
function PackMasterWeb_get_config_item($param, $config = null, $default_value = 7)
{
	if (!$config)
		$config = PackMasterWeb_get_config();
	$config_item = $config[$param];
	if ($config_item < 0)
		$config_item = $default_value;
	return $config_item;
}

//
// Gets the configuration that is currently stored in the database.
//
function PackMasterWeb_get_config()
{
	global $xoopsDB;
	$bci = PackMasterWeb_get_config_fields();
	$sql =	"select " . PackMasterWeb_to_string($bci) . " from " . $xoopsDB->prefix("PackMasterWeb_config");
	$result = $xoopsDB->query($sql);
	if (!$result)
	{
		$error = $xoopsDB->error();
		PackMasterWeb_show_sql_error(_AM_PMW_ERR_QUERY_FAILED, $error, $sql);
		return null;
	}
	$values = $xoopsDB->fetchArray($result); 
	return $values;
}


//
// Gets a list of the fields in the configuration database
//
function PackMasterWeb_get_config_fields()
{
	// ZZZ We need to generate this from the database schema
	$config_info = array
	(
		// Database field			// Name used in web user interface.
		"config_id"				=>	"X ERROR X",
		"config_main_count"		=>	_AM_PMW_LABEL_CONFIG_MAIN_COUNT,
		"config_main_where"		=>	_AM_PMW_LABEL_CONFIG_MAIN_WHERE,
		"config_block_count"	=>	_AM_PMW_LABEL_CONFIG_BLOCK_COUNT,
		"config_block_where"	=>	_AM_PMW_LABEL_CONFIG_BLOCK_WHERE,
	);
	return $config_info;
}

//
// Gets the value as a string. If the value is an array, it concatenates the elements, separated by spaces.
//
function PackMasterWeb_get_value($v)
{
		if (!is_array($v))
			return $v;
		$str = "";
		$first = true;
		foreach($v as $i)
		{
			if (!$first)
				$str .= ", ";
			$str .= $i;
			$first = false;
		}
		return $str;
}

//
// Returns a list of all the fields in table_one
//
function PackMasterWeb_get_table_one_fields()
{
	// ZZZ We need to generate this from actual database field list.
	return array
	(
		// Field										   Prompt
		"table_one_key"		=> "table_one_key",
		"table_one_char"		=> "table_one_char",
		"table_one_text"		=> "table_one_text",
	);
}

?>
