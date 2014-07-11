<?php
/**
*
* @package Meta Tags phpBB SEO
* @version $Id: release_2_0_0_b1.php 429 2014-07-09 14:10:55Z  $
* @copyright (c) 2014 www.phpbb-seo.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace phpbbseo\meta\migrations;

class release_2_0_0_b1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return !empty($this->config['seo_meta_on']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\rc1');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('seo_meta_on', 1)),
		);
	}
}
