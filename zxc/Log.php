<?php
namespace zxc;
class Log extends \core\LogAbstract implements \core\LogInterface
{
	public static function log($str) 
	{
		self::Instance()->log[] = $str;
	}
	public function _write() 
	{
		echo implode("\n", self::Instance()->log) . "\n";
		$date = new \DateTime();
		if(!is_dir("./Log")) mkdir ("./Log");
		file_put_contents('./Log'.$date->format('d.m.Y\_H.m.s.u').'.log', implode("\n", self::Instance()->log) . "\n");
	}
	public static function write() 
	{
		static::Instance()->_write();
	}
}
?>