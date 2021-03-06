<?php

/**
 * MDNS controller.
 *
 * @category   apps
 * @package    mdns
 * @subpackage controllers
 * @author     ClearFoundation <developer@clearfoundation.com>
 * @copyright  2011 ClearFoundation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License version 3 or later
 * @link       http://www.clearfoundation.com/docs/developer/apps/mdns/
 */

///////////////////////////////////////////////////////////////////////////////
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
///////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
// C L A S S
///////////////////////////////////////////////////////////////////////////////

/**
 * MDNS controller.
 *
 * @category   apps
 * @package    mdns
 * @subpackage controllers
 * @author     ClearFoundation <developer@clearfoundation.com>
 * @copyright  2011 ClearFoundation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License version 3 or later
 * @link       http://www.clearfoundation.com/docs/developer/apps/mdns/
 */

class Settings extends ClearOS_Controller
{
    /**
     * FTP default controller
     *
     * @return view
     */

    function index()
    {
        $this->_view_edit('view');
    }

    /**
     * FTP edit controller
     *
     * @return view
     */

    function edit()
    {
        $this->_view_edit('edit');
    }

    /**
     * Common view/edit form
     *
     * @param string $mode form mode
     *
     * @return view
     */

    function _view_edit($mode)
    {
        // Load dependencies
        //------------------

        $this->lang->load('base');
        $this->lang->load('mdns');


        // Set validation rules
        //---------------------
         

        // Handle form submit
        //-------------------


        // Load view data
        //---------------

        // Load views
        //-----------

    }
}
