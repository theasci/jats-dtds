<?php

namespace theasci;

class JatsDtds {
	static public function getPath(){
		return dirname(__FILE__) . '/JATS-journalpublishing1.dtd';
	}
}
/*
spl_autoload_register('jatsdtds_autoload');

function jatsdtds_autoload($class_name)
{
}
*/
