<?php declare(strict_types=1);

namespace XoopsModules\Packmasterweb;

/*
 Utility Class Definition

 You may not change or alter any portion of this comment or credits of
 supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit
 authors.

 This program is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @license      https://www.fsf.org/copyleft/gpl.html GNU public license
 * @copyright    https://xoops.org 2000-2020 &copy; XOOPS Project
 * @author       Mamba <mambax7@gmail.com>
 */

use XoopsModules\Packmasterweb\{Common,
    Helper
};

Helper::getInstance()->loadLanguage('admin');

/**
 * Class Utility
 */
class Utility extends Common\SysUtility
{
    //--------------- Custom module methods -----------------------------

    //
    // Formats an array as a comma delimited string
    //
    public static function toString($assoc_array)
    {
        $str = '';
        foreach ($assoc_array as $key => $value) {
            if ('' !== $str) {
                $str .= ', ';
            }
            $str .= $key;
        }
        return $str;
    }

    //
    // Shows the error message and query for a failed database access
    //
    public static function showSqlError($title, $error, $sql): void
    {
        print
            "<table>\n" . "<TR><TH colspan = '2'>${title}</TH></TR>\n" . "<TR><TD class='head' valign = 'top'>" . _AM_PMW_ERROR_ERROR . "</TD><TD class='even'>${error}</TD></TR>\n" . "<TR><TD class='head' valign = 'top'>" . _AM_PMW_ERROR_QUERY . "</TD><TD class='even'>${sql}</TD></TR>\n" . "</table>\n";
    }

    //
    // Formats and returns a horizontal menu
    //
    public static function horizontalMenu($menu_def)
    {
        $str   = '<P>';
        $first = true;
        foreach ($menu_def as $menu_title => $menu_link) {
            if ($first) {
                $first = false;
            } else {
                $str .= '| ';
            }
            $str .= "<a href='" . $menu_link . "'>" . $menu_title . '</a> ';
        }
        $str .= '</p>';
        return $str;
    }

    //
    // Displays the horizontal menu for PackMasterWeb administration
    //
    public static function horizontalMenuAdmin(): void
    {
        // ZZZFix this. Clean up menu sharing.
        global $adminmenu;
        print '<table><tr>';
        $first = true;
        if ($adminmenu && !empty($adminmenu)) {
            foreach ($adminmenu as $menu_item) {
                print "<td>\n";
                $link = $menu_item['link'];
                $link = '../' . $link;
                if ($first) {
                    $first = false;
                } else {
                    print '| ';
                }
                print "<a href='" . $link . "'";
                if (isset($menu_item['target'])) {
                    print " target='" . $menu_item['target'] . "'";
                }
                print '>' . $menu_item['title'] . '</a>';
                print "</td>\n";
            }
        }
        print '</tr></table><BR>';
    }

    //
    // Loads the strings used for internationalizing the templates into the current template
    //
    public static function addIntl(): void
    {
        global $xoopsTpl;
        $intl = self::getIntl();
        $xoopsTpl->assign('lang', $intl);
    }

    //
    // Returns an associative array, with the constants used for internationalizing the templates
    // This allows a module to run in multiple languages at a time (each user can choose a language)
    //
    public static function getIntl()
    {
        return [
            'block_title' => _AM_PMW_LANG_BLOCK_TITLE,
            'error'       => _AM_PMW_LANG_ERROR,
            'sample'      => _AM_PMW_LANG_SAMPLE,
            'welcome'     => _AM_PMW_LANG_WELCOME,
        ];
    }

    //
    // Gets the configuration that is currently stored in the database.
    // $param is the name of the field we want to retrieve
    // $config is the configuration record from the database.
    //			If you are querying multiple values, you can reuse the config object
    //			instead of querying the database for each field.
    //	$default_value The default value for the parameter
    //
    public static function getConfigItem($param, $config = null, $default_value = 7)
    {
        if (!$config) {
            $config = self::getConfig();
        }
        $config_item = $config[$param];
        if ($config_item < 0) {
            $config_item = $default_value;
        }
        return $config_item;
    }

    //
    // Gets the configuration that is currently stored in the database.
    //
    public static function getConfig()
    {
        global $xoopsDB;
        $bci    = self::getConfigFields();
        $sql    = 'select ' . self::toString($bci) . ' from ' . $xoopsDB->prefix('PackMasterWeb_config');
        $result = $xoopsDB->query($sql);
        if (!$result) {
            $error = $xoopsDB->error();
            self::showSqlError(_AM_PMW_ERROR_QUERY_FAILED, $error, $sql);
            return null;
        }
        return $xoopsDB->fetchArray($result);
    }

    //
    // Gets a list of the fields in the configuration database
    //
    public static function getConfigFields()
    {
        // ZZZ We need to generate this from the database schema
        return [
            // Database field			// Name used in web user interface.
            'config_id'          => 'X ERROR X',
            'config_main_count'  => _AM_PMW_LABEL_CONFIG_MAIN_COUNT,
            'config_main_where'  => _AM_PMW_LABEL_CONFIG_MAIN_WHERE,
            'config_block_count' => _AM_PMW_LABEL_CONFIG_BLOCK_COUNT,
            'config_block_where' => _AM_PMW_LABEL_CONFIG_BLOCK_WHERE,
        ];
    }

    //
    // Gets the value as a string. If the value is an array, it concatenates the elements, separated by spaces.
    //
    public static function getValue($v)
    {
        if (!is_array($v)) {
            return $v;
        }
        $str   = '';
        $first = true;
        foreach ($v as $i) {
            if (!$first) {
                $str .= ', ';
            }
            $str   .= $i;
            $first = false;
        }
        return $str;
    }

    //
    // Returns a list of all the fields in table_one
    //
    public static function getTableOneField()
    {
        // ZZZ We need to generate this from actual database field list.
        return [
            // Field										   Prompt
            'table_one_key'  => 'table_one_key',
            'table_one_char' => 'table_one_char',
            'table_one_text' => 'table_one_text',
        ];
    }

    public static function import_request_variables($g, $prfix): void
    {
        foreach ($_GET as $k => $v) {
            $v_name = $prfix . $k;
            global ${$v_name};
            ${$prfix . $k} = $v;
        }
        foreach ($_POST as $k => $v) {
            $v_name = $prfix . $k;
            global ${$v_name};
            ${$prfix . $k} = $v;
        }
    }
}
