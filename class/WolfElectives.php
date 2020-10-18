<?php declare(strict_types=1);

namespace XoopsModules\Packmasterweb;

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

Helper::getInstance()->loadLanguage('BadgeInfo');

class WolfElectives
{
    //================================================================
    public function __construct()
    {
        $this->_logger = new Logger();
        $this->_logger->setLogOption(3);
        $this->_logger->setHeader('WolfElectives');
        $this->_logger->log('new WolfElectives');
        $this->WolfPoints = new Electives();
    }

    //	End Electives Constructor

    //================================================================
    public function getElectiveNames()
    {
        global $wolf_electives;

        return $wolf_electives;
    }

    //	getElectiveNames

    //================================================================
    public function getCompletedElectives($id)
    {
        global $xoopsDB;
        $arrowPoints = [];
        $this->_logger->setHeader('WolfElectives->getCompletedElectivesById');
        $SQL = 'SELECT * FROM ' . $xoopsDB->prefix('PackMasterWeb_WolfElectives') . ' ' . 'WHERE scout_id=' . $id;
        $this->_logger->log($SQL);
        $result = $xoopsDB->query($SQL);
        $result = $xoopsDB->fetchArray($result);
        if ($result && !empty($result)) {
            foreach ($result as $key => $item) {
                $arrowPoints[$key] = $item;
            }    //	End foreach
        }
        $this->_logger->setHeader('WolfElectives');
        return $arrowPoints;
    }

    //	End getCompletedElectives

    //================================================================
    public function getEarnedDates($id)
    {
        $this->_logger->setHeader('WolfElectives->getCompletedElectivesById');
        return $this->WolfPoints->getElectivesById($id);
    }
    //	End getEarnedDates
}    //	WolfElectives
?>

<?php
/*
 * Created on Apr 24, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

?>
