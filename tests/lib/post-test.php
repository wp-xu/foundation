<?php

namespace Xu\Tests\Lib;

class Post_Test extends \WP_UnitTestCase {

	public function test_xu_is_post_type() {
		$post_id = $this->factory->post->create();
		global $post;
		$post = get_post( $post_id );
		$this->assertTrue( xu_is_post_type( $post_id, 'post' ) );
		$this->assertTrue( xu_is_post_type( 'post' ) );
        $this->assertFalse( xu_is_post_type( false ) );
        $this->assertFalse( xu_is_post_type( true ) );
        $this->assertFalse( xu_is_post_type( null ) );
        $this->assertFalse( xu_is_post_type( 1 ) );
        $this->assertFalse( xu_is_post_type( [] ) );
        $this->assertFalse( xu_is_post_type( (object)[] ) );

        try {
            xu_is_post_type( $post_id, false );
            $this->assertTrue( false );
        } catch ( \Exception $e ) {
            $this->assertNotEmpty( $e->getMessage() );
        }
	}

}
