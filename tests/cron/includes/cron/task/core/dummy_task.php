<?php
/**
*
* @package testing
* @copyright (c) 2010 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_cron_task_core_dummy_task extends \phpbb\cron\task\base
{
	static public $was_run = 0;

	public function get_name()
	{
		return get_class($this);
	}

	public function run()
	{
		self::$was_run++;
	}

	public function should_run()
	{
		return true;
	}
}
