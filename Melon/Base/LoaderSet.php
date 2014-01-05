<?php

namespace Melon\Base;

defined( 'IN_MELON' ) or die( 'Permission denied' );

/**
 * 保存加载信息的容器，主要作用是排重
 */
class LoaderSet extends \Melon\Util\Set {
	
	/**
	 * 使用md5格式化键名
	 * 
	 * @param mixed $key
	 * @return string 
	 */
	protected function _normalizeKey( $key ) {
		return md5( $key );
	}
}