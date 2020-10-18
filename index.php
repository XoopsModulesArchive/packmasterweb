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

use XoopsModules\Packmasterweb\{AcademicSport,
    Advancement,
    BearElectives,
    Helper,
    Logger,
    ScoutData,
    Utility,
    WolfElectives
};

/** @var Helper $helper */

$mytemplate                              = 'PackMasterWeb_index.tpl';
$GLOBALS['xoopsOption']['template_main'] = $mytemplate;

require_once __DIR__ . '\header.php';

Helper::getInstance()->loadLanguage('templates');
// Include any common code for this module.

$myLogger = new Logger();
$myLogger->setHeader('PakcMasterWeb.index');
$myLogger->log('Start');
//====================================================================
//
// This takes the $msg and $data, and puts them into the template.
// Templates used by this module have a space to display
// error messages at the top of the page.
//
function PackMasterWeb_add_error($msg, $data): void
{
    global $xoopsTpl;

    $xerror         = [];
    $xerror['msg']  = $msg;
    $xerror['data'] = $data;
    $xoopsTpl->append('errors', $xerror);
}

//====================================================================
function PackMasterWeb_ScoutSelector(): void
{
    global $xoopsTpl;
    global $xoopsUser;
    global $param_op;
    global $param_scoutid;

    $myLogger = new Logger();

    $myLogger->setHeader('PackMasterWeb_ScoutSelector');
    $myLogger->log('Start ' . $param_op);

    $ScoutSelector = "<form  action='index.php' name='scoutdata' method='POST'>\n" . "<input type='hidden' name='op' value='" . $param_op . "'>\n" . "<select name='scoutid'>";

    $scoutData = new ScoutData();
    $scoutList = $scoutData->getScoutList();

    $myLogger->log('Build Select List ' . count($scoutList));
    if (!isset($param_scoutid)) {
        $param_scoutid = $scoutData->getScoutIdByEMail($xoopsUser->getVar('email', 'E'));
        if (null === $param_scoutid) {
            unset($param_scoutid);
        }
    }    //	End if

    if ($scoutList && !empty($scoutList)) {
        foreach ($scoutList as $rec) {
            if (!isset($param_scoutid)) {
                $param_scoutid = $rec['identifier'];
            }    //	End if
            $ScoutSelector .= "<option value='" . $rec['identifier'] . "'";
            if ($param_scoutid === $rec['identifier']) {
                $ScoutSelector .= ' selected>';
            } else {
                $ScoutSelector .= '>';
            }
            $ScoutSelector .= $rec['LastName'] . ',' . $rec['FirstName'] . '</option>';
        }    //	End foreach
    }
    $ScoutSelector .= "</select>\n" . "<input type='submit' name='submit' value='Go'>\n" . "</form>\n";

    $xoopsTpl->assign('ScoutSelector', $ScoutSelector);
}    //	End PackMasterWeb_ScoutSelector
//====================================================================
function PackMasterWeb_ScoutData(): void
{
    global $xoopsTpl;
    global $xoopsDB;
    global $xoopsOption;
    global $param_scoutid;

    $logger = new Logger();
    $logger->setHeader('PackMasterWeb_ScoutData');
    $logger->log('Start');

    $sd        = new ScoutData();
    $scoutList = $sd->getScoutData($param_scoutid);

    if ($scoutList && !empty($scoutList)) {
        $xoopsTpl->assign('LastName', $scoutList['LastName']);
        $xoopsTpl->assign('FirstName', $scoutList['FirstName']);
        $xoopsTpl->assign('NickName', $scoutList['NickName']);
        $xoopsTpl->assign('HomeAddressLine1', $scoutList['HomeAddressLine1']);
        $xoopsTpl->assign('HomeAddressLine2', $scoutList['HomeAddressLine2']);
        $xoopsTpl->assign('HomeCity', $scoutList['HomeCity']);
        $xoopsTpl->assign('HomeState', $scoutList['HomeState']);
        $xoopsTpl->assign('HomeZip', $scoutList['HomeZip']);
        $xoopsTpl->assign('HomePhone', $scoutList['HomePhone']);
        $xoopsTpl->assign('Email', $scoutList['Email']);
        $xoopsTpl->assign('Den', $scoutList['Den']);
        $xoopsTpl->assign('Parent1FirstName', $scoutList['Parent1FirstName']);
        $xoopsTpl->assign('Parent1LastName', $scoutList['Parent1LastName']);
        $xoopsTpl->assign('Parent1Email', $scoutList['Parent1Email']);
        $xoopsTpl->assign('Parent2LastName', $scoutList['Parent2LastName']);
        $xoopsTpl->assign('Parent2FirstName', $scoutList['Parent2FirstName']);
        $xoopsTpl->assign('Parent2Email', $scoutList['Parent2Email']);
    }

    $mytemplate                              = 'PackMasterWeb_ScoutData.tpl';
    $GLOBALS['xoopsOption']['template_main'] = $mytemplate;
}    //	End PackMasterWeb_ScoutData
//====================================================================
function PackMasterWeb_Tiger(): void
{
    global $xoopsTpl;
    global $xoopsDB;
    global $xoopsOption;
    global $param_scoutid;

    $logger = new Logger();
    $logger->setHeader('PackMasterWeb_Tiger');
    $logger->log('Start for ' . $param_scoutid);

    $sd        = new Advancement();
    $scoutList = $sd->getAdvancementById($param_scoutid);

    $index = 0;
    while ($index < 4) {
        ++$index;
        $key = 'Tiger_Totem_' . $index;
        $ach = $scoutList[$key] ?? 0;
        $logger->log($key . ' = ' . $ach);
        $xoopsTpl->assign($key, $ach);
    }    //	End while
    $index = 0;
    while ($index < 17) {
        ++$index;
        $key = 'Tiger_Achievement_' . $index;
        $ach = $scoutList[$key] ?? 0;
        $logger->log($key . ' = ' . $ach);
        $xoopsTpl->assign($key, $ach);
    }    //	End while
    $mytemplate                              = 'PackMasterWeb_Tiger.tpl';
    $GLOBALS['xoopsOption']['template_main'] = $mytemplate;
}    //	End PackMasterWeb_Bobcat
//====================================================================
function PackMasterWeb_Bobcat(): void
{
    global $xoopsTpl;
    global $xoopsDB;
    global $xoopsOption;
    global $param_scoutid;

    $logger = new Logger();
    $logger->setHeader('PackMasterWeb_Bobcat');
    $logger->log('Start for ' . $param_scoutid);

    $sd        = new Advancement();
    $scoutList = $sd->getAdvancementById($param_scoutid);

    $index = 0;
    while ($index < 9) {
        ++$index;
        $key = 'Bobcat_Acheivement_' . $index;
        $ach = $scoutList[$key] ?? 0;
        $logger->log($key . ' = ' . $ach);
        $xoopsTpl->assign($key, $ach);
    }    //	End while
    $mytemplate                              = 'PackMasterWeb_Bobcat.tpl';
    $GLOBALS['xoopsOption']['template_main'] = $mytemplate;
}    //	End PackMasterWeb_Bobcat
//====================================================================
function PackMasterWeb_Wolf(): void
{
    global $xoopsTpl;
    global $xoopsDB;
    global $xoopsOption;
    global $param_scoutid;

    $arrows = [];

    $logger = new Logger();
    $logger->setHeader('PackMasterWeb_Wolf');
    $logger->log('Start for ' . $param_scoutid);

    $sd        = new Advancement();
    $scoutList = $sd->getAdvancementById($param_scoutid);

    $index = 0;
    while ($index < 13) {
        ++$index;
        $key = 'Wolf_Acheivement_' . $index;
        $ach = $scoutList[$key] ?? 0;
        $logger->log($key . ' = ' . $ach);
        $xoopsTpl->assign($key, $ach);
    }    //	End while
    $myWolfElectives = new WolfElectives();
    $myArrows        = $myWolfElectives->getElectiveNames();
    $myCompleted     = $myWolfElectives->getCompletedElectives($param_scoutid);
    $myPoints        = $myWolfElectives->getEarnedDates($param_scoutid);
    $count           = 1;
    $pointTotal      = 0;
    if ($myArrows && !empty($myArrows)) {
        foreach ($myArrows as $key => $value) {
            $arrows[$key] = [
                'arrow'     => $value,
                'completed' => $myCompleted['elective_' . $count],
                'points'    => $myPoints['Wolf_Points_' . $count],
            ];
            ++$count;
            $pointTotal += $myCompleted['elective_' . $count];
        }    //	End foreach
    }
    $index = 1;
    while ($index <= 12) {
        $ArrowDate = $myPoints['Wolf_Points_' . $index] ?? 0;
        if (1 === $index && ($pointTotal >= 10 || null !== $ArrowDate)) {
            $imgtag = "<img src='images/goldarrow.gif'>";
        } elseif ($pointTotal >= (10 * $index) || null !== $ArrowDate) {
            $imgtag = "<img src='images/silverarrow.gif'>";
        } else {
            $imgtag = '&nbsp;';
        }    //	End if
        $points[$index] = [
            'img'  => $imgtag,
            'date' => $ArrowDate,
        ];
        ++$index;
    }    //	End foreach
    $xoopsTpl->assign('arrows', $arrows);
    $xoopsTpl->assign('Points', $points);

    $mytemplate                              = 'PackMasterWeb_Wolf.tpl';
    $GLOBALS['xoopsOption']['template_main'] = $mytemplate;
}    //	End PackMasterWeb_Wolf
//====================================================================
function PackMasterWeb_Bear(): void
{
    global $xoopsTpl;
    global $xoopsDB;
    global $xoopsOption;
    global $param_scoutid;

    $arrows = [];
    $logger = new Logger();
    $logger->setHeader('PackMasterWeb_Bear');
    $logger->log('Start for ' . $param_scoutid);

    $sd        = new Advancement();
    $scoutList = $sd->getAdvancementById($param_scoutid);

    $index = 0;
    while ($index < 25) {
        ++$index;
        $key = 'Bear_Acheivement_' . $index;
        $ach = $scoutList[$key] ?? 0;
        $logger->log($key . ' = ' . $ach);
        $xoopsTpl->assign($key, $ach);
    }    //	End while
    $myBearElectives = new BearElectives();
    $myArrows        = $myBearElectives->getElectiveNames();
    $myCompleted     = $myBearElectives->getCompletedElectives($param_scoutid);
    $myPoints        = $myBearElectives->getEarnedDates($param_scoutid);
    $count           = 1;
    $pointTotal      = 0;
    if ($myArrows && !empty($myArrows)) {
        foreach ($myArrows as $key => $value) {
            $arrows[$key] = [
                'arrow'     => $value,
                'completed' => $myCompleted['elective_' . $count],
                'points'    => $myPoints['Bear_Points_' . $count],
            ];
            ++$count;
            $pointTotal += $myCompleted['elective_' . $count];
        }    //	End foreach
    }
    $index = 1;
    while ($index <= 12) {
        $ArrowDate = $myPoints['Bear_Points_' . $index] ?? 0;
        if (1 === $index && ($pointTotal >= 10 or null !== $ArrowDate)) {
            $imgtag = "<img src='images/goldarrow.gif'>";
        } elseif ($pointTotal >= (10 * $index) or null !== $ArrowDate) {
            $imgtag = "<img src='images/silverarrow.gif'>";
        } else {
            $imgtag = '&nbsp;';
        }    //	End if
        $points[$index] = [
            'img'  => $imgtag,
            'date' => $ArrowDate,
        ];
        ++$index;
    }    //	End foreach
    $xoopsTpl->assign('arrows', $arrows);
    $xoopsTpl->assign('Points', $points);

    $mytemplate                              = 'PackMasterWeb_Bear.tpl';
    $GLOBALS['xoopsOption']['template_main'] = $mytemplate;
}    //	End PackMasterWeb_Bear
//====================================================================
function PackMasterWeb_Webelos(): void
{
    global $xoopsTpl;
    global $xoopsDB;
    global $xoopsOption;
    global $param_scoutid;

    $logger = new Logger();
    $logger->setHeader('PackMasterWeb_Bear');
    $logger->log('Start for ' . $param_scoutid);

    $sd        = new Advancement();
    $scoutList = $sd->getAdvancementById($param_scoutid);

    $index = 0;
    while ($index < 9) {
        ++$index;
        $key = 'Webelos_Acheivement_' . $index;
        $ach = $scoutList[$key] ?? 0;
        $logger->log($key . ' = ' . $ach);
        $xoopsTpl->assign($key, $ach);
    }    //	End while
    $mytemplate                              = 'PackMasterWeb_Webelos.tpl';
    $GLOBALS['xoopsOption']['template_main'] = $mytemplate;
}    //	End PackMasterWeb_Webelos
//====================================================================
function PackMasterWeb_ArrowOfLight(): void
{
    global $xoopsTpl;
    global $xoopsDB;
    global $xoopsOption;
    global $param_scoutid;

    $logger = new Logger();
    $logger->setHeader('PackMasterWeb_Bear');
    $logger->log('Start for ' . $param_scoutid);

    $sd        = new Advancement();
    $scoutList = $sd->getAdvancementById($param_scoutid);

    $index = 0;
    while ($index < 12) {
        ++$index;
        $key = 'ArrowOfLight_' . $index;
        $ach = $scoutList[$key] ?? 0;
        $logger->log($key . ' = ' . $ach);
        $xoopsTpl->assign($key, $ach);
    }    //	End while
    $mytemplate                              = 'PackMasterWeb_ArrowOfLight.tpl';
    $GLOBALS['xoopsOption']['template_main'] = $mytemplate;
}    //	End PackMasterWeb_ArrowOfLight
//====================================================================
function PackMasterWeb_AcademicSports(): void
{
    global $xoopsTpl;
    global $xoopsDB;
    global $xoopsOption;
    global $param_scoutid;

    $logger = new Logger();
    $logger->setHeader('PackMasterWeb_AcademicSports');
    $logger->log('Start for ' . $param_scoutid);

    $ans     = new AcademicSport();
    $ansList = $ans->getRecord($param_scoutid);

    $xoopsTpl->assign('awards', $ansList);
    //RRB $xoopsTpl->assign('number_of_awards', $max);

    $mytemplate                              = 'PackMasterWeb_AcademicSport.tpl';
    $GLOBALS['xoopsOption']['template_main'] = $mytemplate;
}    //	End PackMasterWeb_BeltLoops
//====================================================================
//
// Displays the "Main" tab of the module
//
function PackMasterWeb_main(): void
{
    global $xoopsTpl;
    global $xoopsDB;

    $xoopsTpl->assign('lang', Utility::getIntl());
    $xoopsTpl->assign('page_title', _MI_PMW_TITLE);

    $config     = Utility::getConfig();
    $main_where = $config['config_main_where'];
    $main_count = $config['config_main_count'];

    $fields_displayed = [];
    foreach (Utility::getTableOneField() as $k => $v) {
        $fields_displayed[] = $v;
    }

    $queryString = 'SELECT ' . Utility::getValue($fields_displayed) . ' FROM ' . $xoopsDB->prefix('PackMasterWeb_table_one') . ' ' . $main_where . ' ORDER BY ' . $fields_displayed[0] . ' ASC';

    $result = $xoopsDB->query($queryString);
    if (!$result) {
        PackMasterWeb_add_error($xoopsDB->error(), $queryString);
        return;
    }
    $book     = [];
    $rowIndex = 1;

    while (false !== ($values = $xoopsDB->fetchArray($result))) {
        if ($rowIndex++ > $main_count) {
            break;
        }

        $xoopsTpl->append('rows', $values);
    }
}

//====================================================================
//
// Handles data posted from any form on the main page
//
function PackMasterWeb_main_post(): void
{
    global $xoopsTpl;
    global $xoopsDB;

    $xoopsTpl->assign('lang', Utility::getIntl());
    $xoopsTpl->assign('page_title', _MI_PMW_TITLE);
}

// Get all HTTP post or get parameters into global variables that are prefixed with "param_"
Utility::import_request_variables('gp', 'param_');

// This page uses smarty templates. Set "$xoopsOption['template_main']" before including header
//RRB $mytemplate = 'PackMasterWeb_index.tpl';
$mytemplate                              = 'PackMasterWeb_ScoutData.tpl';
$GLOBALS['xoopsOption']['template_main'] = $mytemplate;

//require XOOPS_ROOT_PATH . '/header.php';
$xoopsTpl->assign('page_title', _AM_PMW_LABEL_MAIN_TITLE);
$xoopsTpl->assign('EMAIL', $xoopsUser->getVar('email', 'E'));

if (!isset($param_op)) {
    $param_op = 'scout';
}

PackMasterWeb_ScoutSelector();

if (isset($param_scoutid)) {
    $xoopsTpl->assign('param_scoutid', $param_scoutid);
}

$xoopsTpl->assign('param_op', $param_op);

switch ($param_op) {
    case 'scout':
        PackMasterWeb_ScoutData();
        break;
    case 'tiger':
        PackMasterWeb_Tiger();
        break;
    case 'bobcat':
        PackMasterWeb_Bobcat();
        break;
    case 'wolf':
        PackMasterWeb_Wolf();
        break;
    case 'bear':
        PackMasterWeb_Bear();
        break;
    case 'webelos':
        PackMasterWeb_Webelos();
        break;
    case 'arrow':
        PackMasterWeb_ArrowOfLight();
        break;
    case 'academicsport':
        PackMasterWeb_AcademicSports();
        break;
    case 'main_post':
        //RBB PackMasterWeb_main_post();
        break;
    default:
        //print "<h1>:Unknown method requested '$param_op' in index.php</h1>";
        //exit();
}

require XOOPS_ROOT_PATH . '/footer.php';
//require __DIR__ . '/footer.php';
