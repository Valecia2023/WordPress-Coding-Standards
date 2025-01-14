<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace WordPressCS\WordPress\Tests\WhiteSpace;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the ControlStructureSpacing sniff.
 *
 * @package WPCS\WordPressCodingStandards
 *
 * @since   2013-06-11
 * @since   0.13.0     Class name changed: this class is now namespaced.
 *
 * @covers \WordPressCS\WordPress\Sniffs\WhiteSpace\ControlStructureSpacingSniff
 */
final class ControlStructureSpacingUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @param string $testFile The name of the file being tested.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList( $testFile = '' ) {

		switch ( $testFile ) {
			case 'ControlStructureSpacingUnitTest.1.inc':
				$ret = array(
					4   => 2,
					17  => 2,
					29  => 5,
					37  => 1,
					41  => 1,
					42  => 1,
					49  => 5,
					58  => 3,
					67  => 1,
					68  => 1,
					69  => 1,
					71  => 1,
					72  => 1,
					81  => 3,
					82  => 1,
					85  => 1,
					91  => 2,
					92  => 1,
					94  => 1,
					95  => 1,
					97  => 1,
					98  => 1,
					135 => 2,
					137 => 5,
					144 => 1,
					152 => 2,
					179 => 1,
					180 => 1,
					182 => 1,
					184 => 1,
					190 => 1,
					192 => 1,
					196 => 2,
					200 => 2,
					247 => 1,
					257 => 1,
					267 => 1,
				);

				return $ret;

			case 'ControlStructureSpacingUnitTest.2.inc':
				return array(
					6  => 1,
					16 => 1,
					19 => 1,
				);

			default:
				return array();
		}
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array();
	}
}
