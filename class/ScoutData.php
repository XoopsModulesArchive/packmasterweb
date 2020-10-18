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

class ScoutData
{
    //================================================================
    public function __construct()
    {
        $this->_logger = new Logger();
        $this->_logger->setLogOption(3);
        $this->_logger->setHeader('ScoutData');
        $this->_logger->log('ScoutData->create object');
    }

    //	End ScoutData

    //================================================================
    public function checkOnScout($FirstName, $LastName)
    {
        $this->_logger->setHeader('ScoutData->checkOnScout');
        $this->_logger->log('start');
        $result = $this->getScoutId($FirstName, $LastName);
        $this->_logger->setHeader('ScoutData->checkOnScout');
        $this->_logger->log('ID=' . $result);
        if ($result > -1) {
            $this->_logger->log('TRUE');
            return true;
        }

        $this->_logger->log('FALSE');
        return false;    //	End if
    }

    //	End checkOnScout

    //================================================================
    public function saveScoutRecord($record): void
    {
        error_log("saveScoutRecord\n", 3, '/tmp/pmw.log');
        $this->_logger->setHeader('ScoutData->saveScoutRecord');
        $this->_logger->log('start');
        if ($this->checkOnScout($record['FirstName'], $record['LastName'])) {
            $this->_logger->setHeader('ScoutData->saveScoutRecord');
            $this->_logger->log('do update');
            $this->updateScoutRecord($record);
        } else {
            $this->_logger->setHeader('ScoutData->saveScoutRecord');
            $this->_logger->log('do insert');
            $this->insertScoutRecord($record);
        }    //	End if
        $this->_logger->setHeader('ScoutData->saveScoutRecord');
        $this->_logger->log('end');
    }

    //	End saveScoutRecord

    //================================================================
    public function updateScoutRecord($record): void
    {
        global $xoopsDB;
        $this->_logger->setHeader('ScoutData->updateScoutRecord');
        $SQL  = 'UPDATE ' . $xoopsDB->prefix('PackMasterWeb_Scout_Data') . ' SET ';
        $pass = 0;
        foreach ($record as $key => $value) {
            if ($pass > 0) {
                $SQL .= ',';
            }
            $SQL .= $key . "='" . $value . "'";
            ++$pass;
        }    //	End foreach
        $this->id = $this->getScoutId($record['FirstName'], $record['LastName']);
        $SQL      .= ' WHERE identifier=' . $this->id;
        $this->_logger->setHeader('ScoutData->updateScoutRecord');
        $this->_logger->log($SQL);
        $xoopsDB->query($SQL);
    }

    //	End updateScoutRecord

    //================================================================
    public function insertScoutRecord($record): void
    {
        global $xoopsDB;
        $this->_logger->setHeader('ScoutData->insertScoutRecord');
        $SQL  = 'INSERT INTO ' . $xoopsDB->prefix('PackMasterWeb_Scout_Data') . ' ';
        $pass = 0;
        foreach ($record as $key => $value) {
            $this->_logger->log('insert ' . $key . '=' . $value);
            if ($pass > 0) {
                $FieldList .= ',';
                $ValueList .= ',';
            }    //	End if
            $FieldList .= $key;
            $ValueList .= "'" . $value . "'";
            ++$pass;
        }    //	End foreach
        $SQL .= ' (' . $FieldList . ') VALUES (' . $ValueList . ')';
        $this->_logger->log($SQL);
        $xoopsDB->query($SQL);
    }

    //	End insertScoutRecord

    //================================================================
    public function getScoutById($id)
    {
        global $xoopsDB;
        $SQL    = 'SELECT * FROM ' . $xoopsDB->prefix('PackMasterWeb_Scout_Data') . ' ' . 'WHERE identifier=' . $id;
        $result = $xoopsDB->query($SQL);
        return $xoopsDB->fetchRow($result);
    }

    //	End getScoutById

    //================================================================
    public function getScoutId($FirstName, $LastName)
    {
        global $xoopsDB;
        $this->_logger->setHeader('ScoutData->getScoutId');
        $this->_logger->log($FirstName . ',' . $LastName);
        $SQL = 'SELECT identifier FROM ' . $xoopsDB->prefix('PackMasterWeb_Scout_Data') . ' ' . "WHERE FirstName='" . $FirstName . "' " . "AND LastName='" . $LastName . "' ";

        $this->_logger->log('ScoutData->getScoutId ' . $SQL);
        $result = $xoopsDB->query($SQL);
        if (!$result) {
            $error = 'Error ' . $result;
            $this->_logger->log($error);
            return 0;
        }    //	End if
        $this->id = $xoopsDB->fetchArray($result);
        $this->id = $this->id['identifier'];
        $this->_logger->log('ID=' . $this->id);
        return $this->id;
    }

    //	End getScoutId

    //================================================================
    public function getScoutIdByEMail($email)
    {
        global $xoopsDB;
        $this->_logger->setHeader('ScoutData->getScoutIdByMail');
        $SQL = 'SELECT identifier FROM ' . $xoopsDB->prefix('PackMasterWeb_Scout_Data') . " WHERE Email='" . $email . "' " . " OR Parent1Email='" . $email . "' " . " OR Parent2Email='" . $email . "' ";

        $this->_logger->log($SQL);
        $result = $xoopsDB->query($SQL);
        if (!$result) {
            $this->_logger->log($result->error());
            return null;
        }    //	End IF
        $result   = $xoopsDB->fetchArray($result);
        $this->id = $result['identifier'] ?? 0;
        return $this->id;
    }

    //	End getScoutIdByEMail

    //================================================================
    public function getScoutList()
    {
        global $xoopsDB;
        $myList = [];

        $this->_logger->setHeader('ScoutData->getScoutList');

        $SQL = 'SELECT identifier, FirstName, LastName FROM ' . $xoopsDB->prefix('PackMasterWeb_Scout_Data');

        $this->_logger->log($SQL);
        $this->result = $xoopsDB->query($SQL);
        $rowIndex     = 1;
        while (false !== ($values = $xoopsDB->fetchArray($this->result))) {
            $myList[$rowIndex] = $values;
            ++$rowIndex;
        }    //	End While

        return $myList;
    }

    //	End getScoutList

    //================================================================
    public function getScoutData($id)
    {
        global $xoopsDB;
        $this->_logger->setHeader('ScoutData->getScoutData');
        $SQL = 'SELECT * FROM ' . $xoopsDB->prefix('PackMasterWeb_Scout_Data') . ' ' . 'WHERE identifier=' . $id;

        $this->_logger->log($SQL);
        $result = $xoopsDB->query($SQL);
        $result = $xoopsDB->fetchArray($result);
        if (!$result) {
            $this->_logger->log($xoopsDB->error());
            return null;
        }    //	End if
        return $result;
    }
    //	End getScoutData
}    //	End ScoutData Class
