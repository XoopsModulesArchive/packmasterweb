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
class Logger
{
    //================================================================
    public function __construct()
    {
        $this->_option = 3;
        $this->_file   = '/tmp/pmw.log';
        $this->_head   = 'logger';
        $this->log('start logger');
    }

    //	End Logger Constructor

    //================================================================
    public function setLogOption($option): void
    {
        $this->_option = $option;
    }

    //	End setLogOption

    //================================================================
    public function setFile($file): void
    {
        $this->_file = $file;
    }

    //	End setFile

    //================================================================
    public function setHeader($head): void
    {
        $this->_head = $head;
    }

    //	End setHeader

    //================================================================
    public function log($msg): void
    {
        //RRB error_log($this->_head . " - " . $msg . "\n", $this->_option, $this->_file);
    }
    //	End log
}    //	logger Class
