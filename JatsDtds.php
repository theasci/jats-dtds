<?php

namespace theasci;

class JatsDtds {
	static public function getPath($version = '1.1d3'){
		return dirname(__FILE__) . "/{$version}/JATS-journalpublishing1.dtd";
	}
}
