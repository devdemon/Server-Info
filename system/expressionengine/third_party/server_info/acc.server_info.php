<?php if (!defined('BASEPATH')) die('No direct script access allowed');

/**
 * Server Info Accesory File
 *
 * @package			DevDemon_ServerInfo
 * @author			DevDemon <http://www.devdemon.com> - Lead Developer @ Parscale Media
 * @copyright 		Copyright (c) 2007-2011 Parscale Media <http://www.parscale.com>
 * @license 		http://www.devdemon.com/license/
 * @link			http://www.devdemon.com/
 * @see				http://expressionengine.com/user_guide/development/module_tutorial.html#core_module_file
 */
class Server_info_acc
{
	var $id				= 'ServerInfo';
	var $name			= 'Server Info';
	var $version		= '2.1';
	var $description	= 'Displays all sorts of Server Info';
	var $sections		= array();

	 /**
	 * Constructor
	 *
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
		$this->EE =& get_instance();

	}

	// ********************************************************************************* //

	/**
	 * Set content for the accessory
	 *
	 * @access	public
	 * @return	void
	 */
	public function set_sections()
	{
		$this->EE->lang->loadfile('server_info');

		$this->EE->cp->add_to_head('<style type="text/css">
				#ServerInfo table {color:#A0AAA4; font-size:11px; text-align:left; width:100%;}
				#ServerInfo table th {font-weight:bold; border-bottom:2px solid #39454B;}
				#ServerInfo table td {border-bottom:1px solid #39454B; padding:6px 0px 5px;}
				#ServerInfo table td strong {padding:0 10px 0 0;}
			</style>
		');

		$this->sections[$this->EE->lang->line('si:dates')] = $this->EE->load->view('dates', array(), TRUE);
		$this->sections[$this->EE->lang->line('si:phpconfig')] = $this->EE->load->view('phpconfig', array(), TRUE);
		$this->sections[$this->EE->lang->line('si:eeconfig')] = $this->EE->load->view('eeconfig', array(), TRUE);

	}

	// ********************************************************************************* //


} // END CLASS

/* End of file acc.hits.php */
/* Location: ./system/expressionengine/third_party/hits/acc.hits.php */