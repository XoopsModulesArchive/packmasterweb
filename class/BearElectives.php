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

class BearElectives
{
    //================================================================
    public function __construct()
    {
        $this->_logger = new Logger();
        $this->_logger->setLogOption(3);
        $this->_logger->setHeader('BearElectives');
        $this->_logger->log('new BearElectives');
        $this->BearPoints = new Electives();
    }

    //	End Electives Constructor

    //================================================================
    public function getElectiveNames()
    {
        global $bear_electives;

        return $bear_electives;
    }

    //	getElectiveNames

    //================================================================
    public function getCompletedElectives($id)
    {
        global $xoopsDB;
        $arrowPoints = [];
        $this->_logger->setHeader('BearElectives->getCompletedElectivesById');
        $SQL = 'SELECT * FROM ' . $xoopsDB->prefix('PackMasterWeb_BearElectives') . ' ' . 'WHERE scout_id=' . $id;
        $this->_logger->log($SQL);
        $result = $xoopsDB->query($SQL);
        $result = $xoopsDB->fetchArray($result);
        if ($result && !empty($result)) {
            foreach ($result as $key => $item) {
                $arrowPoints[$key] = $item;
            }    //	End foreach
        }
        $this->_logger->setHeader('BearElectives');
        return $arrowPoints;
    }

    //	End getCompletedElectives

    //================================================================
    public function getEarnedDates($id)
    {
        $this->_logger->setHeader('BearElectives->getCompletedElectivesById');
        return $this->BearPoints->getElectivesById($id);
    }
    //	End getEarnedDates
}    //	BearElectives
