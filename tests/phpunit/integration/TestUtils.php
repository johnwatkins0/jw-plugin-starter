<?php

namespace JohnWatkins0\JwPluginStarter\Tests\PhpUnit;

use \WP_UnitTestCase;
use function JohnWatkins0\JwPluginStarter\double_it;

class TestUtils extends WP_UnitTestCase {
	public function test_double_it() {
		$this->assertEquals( 2, double_it() );
	}
}
