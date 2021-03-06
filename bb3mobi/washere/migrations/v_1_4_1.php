<?php
/**
*
* @package - NV "who was here?"
* @copyright (c) nickvergessen - http://www.flying-bits.org/
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
/**
* @package phpBB3.1
* @copyright Anvar (c) 2015 bb3.mobi
*/
/**
* @package phpBB3.2
* @copyright LukeWCS (c) 2018 wcsaga.org
*/

namespace bb3mobi\washere\migrations;

class v_1_4_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['wwh_mod_version']) && version_compare($this->config['wwh_mod_version'], '1.4.1', '>=');
	}

	static public function depends_on()
	{
		return array('\bb3mobi\washere\migrations\v_1_4_0');
	}

	public function update_data()
	{
		return array(
			// Add configs
			// Add permissions
			// Set permissions
			// Set permission roles
			// Set current version
			array('config.update', array('wwh_mod_version', '1.4.1')),
		);
	}

	public function revert_data()
	{
		return(array(
			// Remove configs
			// Remove permissions
		));
	} 
}
