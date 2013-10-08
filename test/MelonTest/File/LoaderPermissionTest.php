<?php
define('IN_MELON', true);
define('MELON_ROOT', '/www/Melon/MelonFramework/');

require_once MELON_ROOT . '/Melon/File/LoaderPermission.php';
require_once MELON_ROOT . '/Melon/Exception/BaseException.php';
require_once MELON_ROOT . '/Melon/Exception/RuntimeException.php';
use Melon\File\LoaderPermission;

class LoaderPermissionTest extends PHPUnit_Framework_TestCase {
	
	public function testVerify() {
		$loaderPermission = new LoaderPermission( array( __DIR__ ) );
		$this->assertTrue( $loaderPermission->verify( __FILE__, __DIR__ . '/PermissionTest/file.php' ) );
		$this->assertFalse( $loaderPermission->verify( __FILE__, __DIR__ . '/PermissionTest/_file.php' ) );
	}
}