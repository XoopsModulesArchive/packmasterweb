<?php declare(strict_types=1);

namespace XoopsModules\Packmasterweb;

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

class Advancement
{
    //================================================================
    public function __construct()
    {
        $this->_logger = new Logger();
        $this->_logger->setLogOption(3);
        $this->_logger->setHeader('Addvancement');
        $this->_logger->log('new Advancement');
    }

    //	End Advancement Constructor

    //================================================================
    public function getAdvancementByName($FirstName, $LastName): void
    {
    }

    //	End getAdvancementByName

    //================================================================
    public function getAdvancementById($id)
    {
        global $xoopsDB;
        $this->_logger->setHeader('Advancement->getAdvancementById');
        $SQL = 'SELECT * FROM ' . $xoopsDB->prefix('PackMasterWeb_Rank_Dates') . ' ' . 'WHERE scout_id=' . $id;
        $this->_logger->log($SQL);
        $result = $xoopsDB->query($SQL);
        $result = $xoopsDB->fetchArray($result);
        return $result;
    }

    //	End getAdvancemtneById

    //================================================================
    public function saveAdvancement($FirstName, $LastName, $record): void
    {
        global $xoopsDB;
        $this->_logger->setHeader('Advancement->saveAdvancement');
        $this->sd = new ScoutData();
        $this->id = $this->sd->getScoutId($FirstName, $LastName);
        $SQL      = 'DELETE FROM ' . $xoopsDB->prefix('PackMasterWeb_Rank_Dates') . ' WHERE scout_id=' . $this->id;

        $xoopsDB->query($SQL);

        $SQL       = 'INSERT INTO ' . $xoopsDB->prefix('PackMasterWeb_Rank_Dates');
        $pass      = 0;
        $FieldList = 'Scout_id, ';
        $ValueList = $this->id . ',';
        foreach ($record as $key => $value) {
            $this->_logger->log('insert ' . $key . '=' . $value);
            if ($pass > 0) {
                $FieldList .= ',';
                $ValueList .= ',';
            }    //	End if
            $FieldList .= $key;
            if (strlen($value) > 4) {
                //$value="STR_TO_DATE('" . $value . "', '%m/%d/%y') ";
                [$month, $day, $year] = preg_split('/[/.-]/', $value);
                $value = "'" . $year . '-' . $month . '-' . $day . "'";
            } else {
                $value = 'null';
            }
            $ValueList .= $value;
            ++$pass;
        }    //	End foreach
        $SQL .= ' (' . $FieldList . ') VALUES (' . $ValueList . ')';
        $this->_logger->log($SQL);
        $xoopsDB->query($SQL);
    }
    //	End saveAdvancement
}    //	End Advancement Class
