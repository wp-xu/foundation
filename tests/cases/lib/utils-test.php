<?php

namespace Xu\Tests\Lib;

use Xu\Tests\Unit_Test_Case;

class Utils_Test extends Unit_Test_Case {

	public function test_xu_with() {
		require_once XU_FIXTURE_DIR . '/classes/class-say.php';
		$this->assertEquals( 'Hello Fredrik!', xu_with( new \Say )->hello( 'Fredrik' ) );
	}

	public function test_xu_is_wp() {
		$this->assertTrue( xu_is_wp( get_bloginfo( 'version' ) ) );
		$this->assertTrue( xu_is_wp( get_bloginfo( 'version' ), '=' ) );
		$this->assertFalse( xu_is_wp( get_bloginfo( 'version' ), '>' ) );
		$this->assertFalse( xu_is_wp( '1.0' ) );
		$this->invalidArgumentTest( 'xu_is_wp', ['string', 'string'] );
	}

}