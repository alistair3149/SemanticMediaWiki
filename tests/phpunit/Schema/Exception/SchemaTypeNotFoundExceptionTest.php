<?php

namespace SMW\Tests\Schema\Exception;

use SMW\Schema\Exception\SchemaTypeNotFoundException;

/**
 * @covers \SMW\Schema\Exception\SchemaTypeNotFoundException
 * @group semantic-mediawiki
 *
 * @license GPL-2.0-or-later
 * @since 3.0
 *
 * @author mwjames
 */
class SchemaTypeNotFoundExceptionTest extends \PHPUnit\Framework\TestCase {

	public function testCanConstruct() {
		$instance = new SchemaTypeNotFoundException( 'foo' );

		$this->assertInstanceof(
			SchemaTypeNotFoundException::class,
			$instance
		);

		$this->assertInstanceof(
			'\RuntimeException',
			$instance
		);
	}

	public function testGetType() {
		$instance = new SchemaTypeNotFoundException( 'foo' );

		$this->assertEquals(
			'foo',
			$instance->getType()
		);
	}

}
